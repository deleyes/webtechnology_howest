<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Format fasta</title>
   <style type="text/css">
   form input[type=file], form textarea {

      margin-left: 50px;
   }

   form textarea {

      width: 500px;
      height: 250px;
   }

   form div { margin: 1em 0;}

   h3 { margin-top: 2em; }


   table { border-collapse: collapse; }

   td, th {

      border: solid lightgray 1px;
      padding: 1em;
   }

   .A, .a { color: red; }
   .T, .t { color: orange; }
   .C, .c { color: green; }
   .G, .g { color: blue; }

   .plotwrap {

      border-left: solid gray 2px;
      border-bottom: solid gray 2px;
      padding: 15px;
      margin: 50px;
      display: inline-block;
      position: relative;
   }
   .bar {
      box-sizing: border-box;
      background: lightblue;
      border: solid gray 1px;
      text-align: right;
      line-height: 1.5em;
   }
   .scale {
      box-sizing: border-box;
      border: solid #ddd 1px;
      width: 500px;
      margin: 5px;
   }
   </style>
</head>
<body>
   <form action="#" method="post" enctype="multipart/form-data">
      <div>
         <label for="radio-file">
            <input type="radio" value="file" name="upload-type" id="radio-file" checked>
            Select fasta file:
            <br>
            <input type="file" name="file">
         </label>
      </div>

      <div>
         <label for="radio-paste">
            <input type="radio" value="paste" name="upload-type" id="radio-paste">
            Paste fasta
            <br>
            <textarea name="paste"></textarea>
         </label>
      </div>

      <div>
         <input type="submit" name="submit">
      </div>
   </form>

<?php

if( isset($_POST['submit']) ) {

   $lines = [];
   $freq = [];
   $fasta_output = [];
   $tot_len = [];
   $current_header = '';

   if( $_POST['upload-type'] == "paste" ) {

      if( !isset( $_POST['paste'] ) or empty( $_POST['paste'] ) ) {

         die( "ERROR: Upload method paste paste, but no data was pasted..." );
      }

      $lines = explode("\n", $_POST['paste'] );
   }
   elseif( $_POST['upload-type'] == "file" ) {

      if( !isset( $_FILES['file'] ) or empty( $_FILES['file'] ) ) {

         die( "ERROR: Upload method is file, but no file was selected..." );
      }

      $lines = file( $_FILES['file']['tmp_name'] );
   }
   else {

      die("Invalid fasta upload type, should be 'paste' or 'file'");
   }

   # ------------------------------------------------------------------------- #
   # Parse fasta

   $fill_line_count = 0;
   foreach( $lines as $line ) {

      $line = trim( $line );
      if( preg_match('/^>/', $line ) ) {

         $fill_line_count = 0;
         $current_header = $line;
         $fasta_output[$current_header] = '';
         $freq[$current_header] = [];
         $tot_len[$current_header] = 0;
      }
      else {

         foreach( str_split($line) as $nt ) {

            if( $fill_line_count == 80 ) {
               $fasta_output[$current_header] .= "\n";
               $fill_line_count = 0;
            }

            if( !isset( $freq[$current_header][$nt] ) ) {
               $freq[$current_header][$nt] = 0;
            }
            $freq[$current_header][$nt]++;
            $tot_len[$current_header]++;
            $fasta_output[$current_header] .= "<span class=\"$nt\">$nt</span>";
            $fill_line_count++;
         }
      }
   }

   # ------------------------------------------------------------------------- #
   # Print links

   echo "<ul>";
   $headcount = 1;
   foreach( $fasta_output as $header => $fasta ) {

      echo "<li><a href=\"#fasta$headcount\">$header</a></li>";
      $headcount++;
   }
   echo "</ul>";

   # ------------------------------------------------------------------------- #
   # Print fasta + bargraph

   $headcount = 1;
   foreach( $fasta_output as $header => $fasta ) {

      echo "<pre>";
      echo "<h3 id=\"fasta$headcount\">$header</h3>";
      echo $fasta;
      $headcount++;
      echo "</pre>";

      echo '<div class="plotwrap">';
      ksort( $freq[$header] );
      foreach( $freq[$header] as $nt => $nr ) {
         $p = round( $nr / $tot_len[$header] * 100 );
         bar( "$p%", "$nt: $p% " );
      }
      echo '</div>';

   }

}

?>

</body>
</html>


<?php

# ============================================================================ #
# Functions

function bar( $width, $text = null ) {

   if( is_null( $text ) ) {

      $text = $width;
   }
	echo '<div class="scale">';
   	echo '<div class="bar" style="width: '.$width.';">';
            echo $text;
      echo '</div>';
   echo '</div>';
}

?>

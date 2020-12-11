<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>L11E03: DNA GC</title>
   <style type="text/css">
   textarea, input.file {

      margin: 1em 3em;
   }
   textarea {

      width: 500px;
      height: 250px;
   }

   .A, .a { color: red;}
   .T, .t { color: orange;}
   .C, .c { color: blue;}
   .G, .g { color: green;}
   </style>
</head>
<body>

   <form action="#" method="post" enctype="multipart/form-data">

   <div>
      <label>
         <input class="radio" type="radio" name="upload_type" value="file">
         Upload a file
      </label>
      <br>
      <input class="file" type="file" name="file" value="">
   </div>

   <div>
      <label>
         <input class="radio" type="radio" name="upload_type" value="paste">
         Paste Some multifasta
      </label>
      <br>
      <textarea name="paste"></textarea>
   </div>
   
   <div>
      <input type="submit" value="submit" name="submit">
   </div>

   </form>

<?php

if( isset($_POST['submit']) ) {

   $input_str = '';

   if( $_POST['upload_type'] == 'paste' ) {

      $input_str = $_POST['paste'];
   }
   elseif( $_POST['upload_type'] == 'file' ) {

      $input_str = file_get_contents( $_FILES['file']['tmp_name']);
   }
   else {

      die("Error: Upload type should be file or paste...");
   }

   $lines = explode( "\n" , $input_str );
   $headers = [];
   // $buffer = [];
   $buffer = [];
   $nt_stats = [];
   $curr_header = '';


   foreach( $lines as $line ) {

      if( preg_match('/^>/', $line) ) {

         // we have a header
         $headers[] = $line;
         $curr_header = $line;

         $buffer[$curr_header] = '';
         $buffer[$curr_header] .= '<strong id="'.$line.'" >' . $line . "</strong>\n";

         continue;
      }

      // $buffer[] = $line;
      // $buffer .= $line . "\n";
      $nts = str_split( $line );
      foreach( $nts as $nt ) {

         // if( $nt == 'A' ) {
         //    $buffer .= "<span style=\"color:red;\">$nt</span>";
         // }
         // else {

         //    $buffer .= $nt;
         // }

         $buffer[$curr_header] .= "<span class=\"$nt\">$nt</span>";

         if( ! isset($nt_stats[$curr_header][$nt]) ) {

            $nt_stats[$curr_header][$nt] = 0;
         }
         $nt_stats[$curr_header][$nt]++;

      }
      $buffer[$curr_header] .= "\n";
   }

   echo "<ul>";
   foreach( $headers as $header ) {

      echo "<li> <a href=\"#$header\" >$header </a> </li>";
   }
   echo "</ul>";

   echo "<pre>";
   // echo implode( "\n", $buffer );
   foreach( $buffer as $header => $buf ) {

      echo $buf;

      print_r( $nt_stats[$header] );

      foreach( $nt_stats[$header] as $nt => $freq ) {

         echo "$nt:$freq\n";
      }
   }

   echo "<hr>";

   print_r( $buffer );
   print_r( $nt_stats );

   echo "</pre>";
}

?>

</body>
</html>

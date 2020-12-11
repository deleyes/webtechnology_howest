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

   /* echo "$input_str"; */
   

   $lines = explode("\n", $input_str );

   // print_r( $lines );

   $nts_printed_per_seq = 0;
   $seq_stats = [];
   $curr_header = '';

   echo "<pre>";
   foreach( $lines as $line ) {

      if( preg_match('/^>/', $line ) ) {

         $nts_printed_per_seq = 0;
         $curr_header = $line;

         $seq_stats[ $curr_header ] = [
            'gc' => 0,
            'total' => 0
         ];

         echo "\n\n<strong>$line</strong>\n";

         continue;
      }

      foreach( str_split( $line) as $nt ) {

         if( $nts_printed_per_seq > 0 and $nts_printed_per_seq % 60 == 0 ) {

            echo "\n";
         }
         echo "$nt";
         $nts_printed_per_seq++;

         $seq_stats[$curr_header]['total']++;

         if( strToUpper($nt) == 'G' or strToUpper($nt) == 'C') {

            $seq_stats[$curr_header]['gc']++;
         }
      }
   }
   echo "</pre>";

   echo "<table>";
      echo "<tr>";
         echo "<th>Sequence</th>";
         echo "<th>% GC</th>";
      echo "</tr>";
   foreach( $seq_stats as $header => $stats ) {

      echo "<tr>";
         echo "<th> $header </th>";
         echo "<td>" . $stats['gc'] / $stats['total'] * 100 . "%</td>";
      echo "</tr>";
   }
   echo "</table>";
}

?>

</body>
</html>

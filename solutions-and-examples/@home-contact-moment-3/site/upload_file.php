<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Upload</title>

   <style type="text/css">
   .A, .a { background: pink; }
   .T { background: lightblue; }
   .C { background: yellow; }
   .G { background: lightgreen; }
   </style>
   

</head>
<body>

   <form action="#" method="post" enctype="multipart/form-data">

      <input type="file" name="file1">
      <input type="file" name="file2">

      <input type="submit" name="submit" value="Upload file">

   </form>
   

<pre>
<?php

if( isset($_POST['submit']) ) {

   /* print_r( $_POST ); */
   /* print_r( $_FILES ); */

   /* echo  $_FILES['file1']['tmp_name'] . "\n"; */
   /* $file_contents = file_get_contents( $_FILES['file1']['tmp_name'] ); */

   /* $file_lines = explode("\n", $file_contents ); */

   $file_lines = file( $_FILES['file1']['tmp_name'] );

   $linenumber = 0;
   foreach( $file_lines as $line ) {

      $linenumber++;
      if( preg_match("/^>/", $line) ) {

         echo "<strong>$linenumber. $line</strong>";
         continue;
      }

      echo "$linenumber. $line";

   }

   foreach( $file_lines as $line ) {

      if( preg_match("/^>/", $line) ) {

         echo "<strong>$line</strong>";
         continue;
      }

      $nts = str_split( $line );

      foreach( $nts as $nt ) {

         $ntclass = strToUpper( $nt );
         /* echo "<span class=\"$ntclass\">$nt</span>"; */

         if( $nt == "A" ) {
            echo "<span style=\"background: pink;\">$nt</span>";
         }
         elseif( $nt == "T" ) {
            echo "<span style=\"background: lightblue;\">$nt</span>";
         }
         else {


         }
      }

   }

   $freq = [];
   $curr_seq_header = "";

   foreach( $file_lines as $line ) {

      $line = trim($line);

      if( preg_match("/^>/", $line) ) {

         $curr_seq_header = $line;
         $freq[$curr_seq_header] = [];
         echo "<strong>$line</strong>";
         continue;
      }

      $nts = str_split( $line );

      foreach( $nts as $nt ) {

         if( !isset($freq[$curr_seq_header][$nt]) ) {

            $freq[$curr_seq_header][$nt] = 0;
         }

         $freq[$curr_seq_header][$nt]++;

      }

   }

   print_r( $freq );
}

?>
</pre>
   
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Welcome</title>
   <link rel="stylesheet" href="styles.css">
   
</head>
<body>

   <?php include( "navbar.php") ?>
   
   <h1>Analyse Input</h1>

<?php

if( isset($_POST['submit']) ) {

   $lines = file( $_FILES['file']['tmp_name'] );

   $align = [];
   $seq_line_nr = 0;
   $curr_header = '';
   $nrof_lines = 0;
   $headers = [];
   foreach( $lines as $line ) {

      $line = trim( $line );

      if( preg_match('/^>/', $line )) {
         
         $nrof_lines = 0;
         $curr_header = $line;
         $headers[] = $curr_header;
         continue;
      }

      $align[$curr_header][] = $line;
      $nrof_lines++;

   }

   echo "<pre>";

   $scores = [ 0.75, 0.5 , 0.8 ];
   $cur_pos = 0;

   for( $cur_line = 0 ; $cur_line < $nrof_lines; $cur_line++ ) {

      foreach($headers as $header ) {

         /* echo "$cur_line : $header\n"; */

         echo "$header:";
         $line =  $align[$header][$cur_line];
         echo $line;
         echo "\n";
      }
      foreach( str_split( $line ) as $nt ) {

         $score  = $scores[$cur_pos];
         echo "$score|";
         $cur_pos++;
      }

   }

}
else {

   echo "Please access this page by submitting the form.";
}

?>

   
</body>
</html>

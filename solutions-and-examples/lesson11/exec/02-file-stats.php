<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>L11E02: File Stats</title>
   <style type="text/css">

   table {

      border-collapse: collapse;
   }

   th, td {

      padding: 1em;
      border: solid black 1px;
   }
   </style>
   
</head>
<body>

   <form action="#" method="post" enctype="multipart/form-data">

      <input type="file" name="file" value="">

      <input type="submit" value="Submit" name="submit">
      
   </form>
   
<?php

if( isset($_POST['submit'] ) ):

   $lines = file( $_FILES['file']['tmp_name'] );

   // print_r( $lines );

   // $nrof_lines = count( $lines );
   $nrof_lines = 0;
   $nrof_words = 0;
   $nrof_chars = 0;
   $freq = [];

   foreach( $lines as $line ) {

      $words = explode( ' ', $line );
      // $nrof_words += count( $words );

      foreach( $words as $word ) {

         $word = trim( $word );

         if( !isset($freq[$word]) ) {

            $freq[$word] = 0;
         }
         // $freq[$word]++;
         // $freq[$word] += 1;
         $freq[$word] = $freq[$word] + 1;
         $nrof_words++;
      }

      $nrof_chars += strlen( $line );
      $nrof_lines++;
   }

arsort( $freq );

?>

   <h3>
      File <?=$_FILES['file']['name']?> has: 
   </h3>

<table>
   <tr>
      <th>Nr Lines</th>
      <td><?= $nrof_lines ?></td>
   </tr>
   <tr>
      <th>Nr Words</th>
      <td><?= $nrof_words ?></td>
   </tr>
   <tr>
      <th>Nr Chars</th>
      <td><?= $nrof_chars ?></td>
   </tr>
</table>


<?php

echo "<ul>";

$counter = 0;

foreach( $freq as $key_word => $word_freq ) {

   echo "<li> $key_word ($word_freq)</li>";

   if($counter >= 10 ) {

      break;
   }
   $counter++;
}

echo "</ul>";

endif;

?>
   
</body>
</html>

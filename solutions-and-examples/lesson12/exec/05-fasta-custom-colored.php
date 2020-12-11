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
      <label>
         Paste Color Def.
      </label>
      <br>
      <textarea name="colors"></textarea>
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

   echo "<pre>";
   // print_r( $_POST);

   print_r( $_POST['colors']);

   $color_defs =  explode("\n", $_POST['colors']) ;
   print_r( $color_defs );

   $color_lookup = [];
   foreach( $color_defs as $def ) {

      $def_parts = explode( ':', $def );

      $color_lookup[ $def_parts[0] ] = $def_parts[1];
   }

   /* print_r( $color_lookup ); */

   $lines = explode( "\n", $input_str );

   foreach($lines as $line ) {

      if( preg_match('/^>/', $line) ) {

         // we found a header
         echo "<strong>$line</strong>\n";
         continue;
      }

      foreach( str_split( $line ) as $nt ) {

         // echo "$nt";

         echo '<span style="color: '. ( $color_lookup[$nt] ?? 'steelblue' ) .' ;">';
            echo "$nt";
         echo "</span>";
      }
      echo "\n";
   }
   echo "</pre>";
}

?>

</body>
</html>

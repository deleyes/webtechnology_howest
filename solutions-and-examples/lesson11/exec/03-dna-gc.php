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

   // echo "$input_str";
   

   $lines = explode("\n", $input_str );

   foreach( $lines as $line ) {

      // echo "$line <hr>";

      if( preg_match('/^>/', $line ) ) {

         echo "This is a header: $line<hr>";
      }
   }
}

?>

</body>
</html>

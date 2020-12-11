<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>L11E01 Cat File</title>
</head>
<body>

   <form action="#" method="post" enctype="multipart/form-data">

      <input type="file" name="file_from_user" value="">
      
      <input type="submit" value="Upload file" name="submit">
      
   </form>
   
<?php

// echo "<pre>";
// print_r( $_FILES );

if( isset( $_POST['submit']) ) {

   echo "<h1>File: '" . $_FILES['file_from_user']['name'] . "' has content: </h1>";

   echo "<pre>";
   echo file_get_contents( $_FILES['file_from_user']['tmp_name'] );
   echo "</pre>";
}
?>

   
</body>
</html>

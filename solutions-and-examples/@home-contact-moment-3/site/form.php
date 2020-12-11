<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Forms</title>
</head>
<body>

<?php

if( isset( $_POST['submit']) ) {

   echo "<pre>";
   print_r( $_POST );
   echo "</pre>";
}
else{

?>

   <!-- <form action="parse_data.php" method="get" enctype="multipart/form-data"> -->
   <form action="#" method="POST" enctype="multipart/form-data">

   <input type="text" name="text" value="default value">
   <input type="hidden" name="text" value="not for the user">
   <input type="password" name="pass" value="">
   <input type="email" name="email" value="">
   <input type="number" name="age" value="">
   <br>
   <label>
      <input type="radio" name="gender" value="male">Male<br>
   </label>
   
   <input type="radio" name="gender" value="female">
   <label for="rb1">Female</label>
   
   <br>

   <select name="pick_one[]" multiple>
      <option value="1">one</option>
      <option value="2">two</option>
      <option value="3">three</option>
      
   </select>
   

   <br>
   <br>
   <input type="checkbox" name="subscribe">Subscribe me<br>
   <input type="checkbox" name="not">I want notifications<br>
   <br>
   <input type="file" name="file">
   
   <br>
   <br>

   <textarea name="area" id="rb1"></textarea>
   
   <br>
   <input type="submit" name="submit" value="Send Data">
   
   </form>
   
<?php

}

?>
</body>
</html>

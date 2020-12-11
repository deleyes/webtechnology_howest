<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Recap</title>
</head>
<body>

   Hello World

   <?php // require("include-this-file.html"); ?>
   <?php // include("include-this-file.html"); ?>

<pre>
<?php

   print_r( $_GET );
   print_r( $_POST );
   print_r( $_REQUEST );

?>
</pre>

   <form action="#" method="get">

      <input type="text" name="field1" value="<?php echo $_GET['field1'] ?? 'default' ?>">
      <input type="text" name="field1" value="<?= $_GET['field1'] ?? '' ?>">
      <input type="hidden" name="field1" value="<?php echo $_GET['field1'] ?? '' ?>">
      
      <input type="submit" name="submit" value="Submit The Form">
      

      <select name="shapes[]" multiple>
         <optgroup label="Shapes">
            <option value="0">cricle</option>
            <option value="3">Triangle</option>
            <option value="4">Square</option>
         </optgroup>
         <optgroup label="Shapes">
            <option value="0">cricle</option>
            <option value="3">Triangle</option>
            <option value="4">Square</option>
         </optgroup>
         
      </select>
      
      <div>
         <textarea name="multi-line-input"></textarea>
      </div>
      
      <div>
         Gender:
         <input type="radio" name="gender" value="male" id="gender-male">
         <label for="gender-male">Male</label>
         
         <label>
            <input type="radio" name="gender" value="female">
            female
         </label>
         
      </div>

         <label>
            Some text input:
            <input type="text" name="gender" value="">
         </label>
      

   </form>
   

<?php

// echo "Hello from PHP<br>";
// 
// for( $i = 0 ; $i < 10 ; $i++ ) {
// 
//    echo "Hello from the loop<br>";
// }

?>



</body>
</html>

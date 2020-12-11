<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>L9E04: Access control</title>
</head>
<body>

<?php

$def_name = 'default';

if( isset($_GET['name']) ) {

   $def_name = $_GET['name'];
}

$def_age = $_GET['age'] ?? 10;

?>

   <form action="#" method="get">

      <div>
         Name:
<input type="text" name="name" value="<?php echo $def_name ?>">
      </div>
      
      <div>
         Age:
<input type="number" name="age" value="<?= $def_age ?>">
      </div>

      <div>
         <input type="submit" name="submit" value="Submit Form">
      </div>
   </form>
   <hr>

<?php

// print_r( $_GET );

if( isset($_GET['submit']) ) {

   $min_age = 21;
   $age = $_GET['age'];

   // if( $_GET['age'] < 21) {
   if( $age <= $min_age) {

      echo "Acces denied<br>";

      echo "try back in " . ( $min_age - $age ) . "years...";
   }
   else {

      echo "Access granted";
   }
}
?>

</body>
</html>

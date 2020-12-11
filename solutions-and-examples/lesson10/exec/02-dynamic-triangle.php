<?php

$def_base = $_GET['base'] ?? 10;
$def_char = $_GET['char'] ?? '*';

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>L10E02: Dynamic triangles</title>
</head>
<body>

   <h4>Draw triangles based on the form input</h4>

   <form action="#" method="get">
      <div>
         Enter base size:
         <input type="number" name="base" value="<?= $def_base ?>">
         
      </div>
      <div>
         Enter character:
         <input type="text" name="char" value="<?= $def_char ?>">
      </div>
      <div>
         <input type="submit" name="submit" value="Show me the triangle">
         
      </div>
   </form>

<?php

// print_r( $_GET );

if( isset( $_GET['submit'] ) ) {

   echo "<hr>";

   $base = $_GET['base'];
   $char = $_GET['char'];

   for( $rows_printed = 1; $rows_printed <= $base; $rows_printed++ )  {

      echo "<div>";

      // echo "Row: $rows_printed";
      
      for( $chars_printed = 0; $chars_printed < $rows_printed ; $chars_printed++ ) {

         echo "$char";
      }

      echo "</div>";
      // echo "<br>";
   }

}
?>

</body>
</html>

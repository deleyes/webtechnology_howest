<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>IO</title>
</head>
<body>

   <form action="#" method="post" enctype="multipart/form-data">
      
      <input type="file" name="input_file" value="">
      <input type="file" name="file_2" value="">
      <input type="submit" value="Upload File" name="submit">

   </form>

<pre>
<?php

print_r( $_POST );
print_r( $_FILES );

// var_dump( file( $_FILES['input_file']['tmp_name'] ) );

$twod_arr = [

   'array_1' => [
      "key" => 'value'
   ],
   'array_2' => [
      "key2" => 'value2'
   ]
];

print_r( $twod_arr );

?>
</pre>

</body>
</html>

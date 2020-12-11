<?php
$new_array =[];

$array = array(
    'position1' => 'hello',
    'position2' => 'world',
    3 => 'three',
    'four' => 4
);

foreach ($array as $key => $value){
    array_push($new_array, $key);
}

print_r($new_array);

//$array = [
//    'position 1' => 'hello',
//    'position 2' => 'world',
//    3            => 'three',
//    'four'       => 4
//];
//
//$keys = [];
//foreach( $array as $key => $value ) {
//
//    $keys[] = $key;
//}
//
//print_r( $keys );

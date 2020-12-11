<?php

$arr = [1,2,3];

print_r( $arr );

$count = count( $arr );

for( $i = 0; $i < $count; $i++) {

   echo "Value at index $i: $arr[$i]\n";
}

$assoc_arr = [
   "pos1" => 1,
   "pos2" => 2,
   "pos3" => 3,
];

foreach( $assoc_arr as $index => $value ) {

   echo "The current value for key $index is $value\n";
}

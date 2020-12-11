<?php

$var1 = '...';
$var2 = '...';
$var3 = '...';
$var4 = '...';

$array = array( 1, 2, 3 );
$array = [ 1, 2, 3 ];

print_r( $array );

echo "$array[1]\n";

$assoc_arr = [
   "one" => 1,
   "two" => 2,
   3 => "three"
];

print_r( $assoc_arr );

echo $assoc_arr['two'] . "\n";

echo "$assoc_arr[two] \n";

echo "the first el is $array[0] \n";

echo count( $array ) . "\n";

echo "the last value is ". $array[count($array) - 1] . "\n";

for( $index = 0; $index < count($array); $index++ ) {

   echo "At index $index we have value $array[$index]\n";
}

//$array[-1] = 'minus 1';
//
//echo "$array[-1]\n";

// append to arr

array_push( $array ,  4);
$array[] = 5;

print_r( $array );

array_unshift( $array, 0 );

print_r( $array );

$first_value = array_shift( $array );

print_r( $array );
echo "the first value was: $first_value\n";;

$last_value = array_pop( $array );

print_r( $array );
echo "the last value was: $last_value\n";

unset( $array[2] );
print_r( $array );

$array[100] = "new value";
array_push( $array, 200 );
print_r( $array );

foreach( $array as $key => $value ) {

   echo "The current value for key: $key is: $value\n";
}

$assoc_arr = [
   "one" => 1,
   "two" => 2,
   3 => "three"
];

$counter = 1;
foreach( $assoc_arr as $index => $item_val ) {

   echo "$counter] the current index = $index\n";
   echo "$counter] the current value = $item_val\n";
   echo "\n";
   $counter++;
}

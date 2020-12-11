<?php

# comment type 1
// comment type 1
/* Line 1
line2
line3
 */

/* echo "\thello world\n"; */
/* echo '\thello world\n'; */

$string = "Hello Class";

echo $string . "\n";

$string1 = "Hello";
$string2 = "World";
$string3 = "!";

$result = $string1 . " " . $string2 . $string3 . "\n";
echo $result;

$string = "string";
$int = 123;
$float = 3.1415;
$boolean = true or false;


echo "Value of \$float is $float\n";

$array = array( 1, 2, 3 );
$array = [ 1, 2, 3 ];

print_r($array);

echo count( $array ). "\n";

echo "value at pos 2 is: " . $array[2] . "\n";
echo "value at pos 2 is: $array[2] \n";

$assoc_array = [
   "one" => 1,
   "two" => 2,
   3 => "three",
];

print_r($assoc_array);

echo "value at pos two is: " . $assoc_array["two"] . "\n";
echo "value at pos \"two\" is: $assoc_array[two] \n";

echo "<div class=\"someclass\">Child</div>\n";

echo 2 + 2 . "\n";
echo 2 - 2 . "\n";
echo 2 * 2 . "\n";
echo 2 / 2 . "\n";
echo 2 ** 2 . "\n";

echo 13 % 2 . "\n";




if( 13 % 2 == 0 ) {

   echo "execute this when COND == true\n";
}
elseif( 13 % 3 == 0 ) {

   echo "execute this when mod 3 == 0\n";
}
elseif( 13 % 4 == 0 ) {

   echo "execute this when mod 3 == 0\n";
}
else {

   echo "execute this when COND == false\n";
}


// Ctrl+c -> stop inifinite loop

$counter = 1;
while( $counter <= 10 ) {

   echo "iter: $counter: Repeat this as long as condition is true\n";

   // $counter = $counter + 1;
   // $counter += 5;
   $counter++;
}

for( $counter = 1; $counter <= 10; $counter++ ) {

   echo "iter: $counter. Via for loop...\n";
}

?>

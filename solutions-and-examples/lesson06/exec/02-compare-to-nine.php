<?php

// php 02-php add-together.php 5
// -> 5 is lesser then 9

$num = $argv[1];

// $div = 9;
$div = $argv[2];

if( $num < $div ) {

   echo "$num is less then $div\n";
}
elseif( $num == $div ) {

   echo "$num is equal to $div\n";
}
else {

   echo "$num is larger then $div\n";
}

if( $num % $div == 0 ) {

   echo "We can devivide $num by $div\n";
}

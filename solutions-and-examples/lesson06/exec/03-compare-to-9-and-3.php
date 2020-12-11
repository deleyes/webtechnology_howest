<?php

// php 03-compare-to-9-and-3.php 10
// -> 10 is larger then 9 and 3

// php 03-compare-to-9-and-3.php 5
// -> 5 is larger then 3 but less then 9

$num = $argv[1];

if( $num < 3 ) {

   echo "$num is less then 9 and 3\n";
}
elseif( $num == 3 ) {

   echo "$num is equal to 3 but less then 9\n";
}
elseif( $num > 3 and $num < 9 ) {

   echo "$num is between 3 and 9\n";
}
elseif( $num == 9 ) {

   echo "$num is larger then 3 and is equal to 9 \n";
}
else {

   echo "$num is larger then 3 and 9\n";
}

// We can divide by 3 AND 9

if( $num % 3 == 0 and $num % 9 == 0 ) {

   echo "We can divide $num by 3 and 9\n";
}

// We can divide by 3 OR 9
if( $num % 3 == 0 or $num % 9 == 0 ) {

   echo "We can divide $num by 3 or 9\n";
}

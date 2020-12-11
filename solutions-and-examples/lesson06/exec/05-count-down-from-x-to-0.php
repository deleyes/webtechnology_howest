<?php

// 05-count-down-from-x-to-0.php 12

$counter = $argv[1];

while( $counter >= 0 ) {

   echo "$counter\n";
   $counter--; // $counter = $counter - 1;
}

// bonus: add step as parameter:
// 05-count-down-from-x-to-0.php 12 3



// Bonus: add step as parameter with fallback:
// 05-count-down-from-x-to-0.php 12 # steps of 1
// 05-count-down-from-x-to-0.php 12 4 # steps of 4

$counter = $argv[1];
$step = 1;
if( isset( $argv[2] ) ) {

   $step = $argv[2];
}

while( $counter >= 0 ) {

   echo "$counter\n";
   // $counter--; // $counter = $counter - 1;

   $counter -= $step;
}

<?php

// 04-count-from-0-to-x.php 12

// $num = $argv[1];
// $counter = 0;
// 
// while( $counter <= $num ) {
// 
//    echo "$counter\n";
//    $counter++;
// }

// bonus: add step as parameter:
// 04-count-from-0-to-x.php 12 3
// $num = $argv[1];
// $step = $argv[2];
// $counter = 0;
// 
// while( $counter <= $num ) {
// 
//    echo "$counter\n";
// 
//    // $counter = $counter + $step;
//    $counter += $step;
// }


// Bonus: add step as parameter with fallback:
// 04-count-from-0-to-x.php 12 # steps of 1
// 04-count-from-0-to-x.php 12 4 # steps of 4

$num = $argv[1];
// $step = $argv[2] ?? 1;
$step = 1;

if( isset($argv[2]) ) {

   $step = $argv[2];
}

$counter = 0;

while( $counter <= $num ) {

   echo "$counter\n";

   // $counter = $counter + $step;
   $counter += $step;
}

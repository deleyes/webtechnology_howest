<?php

// if( !isset( $argv[1] ) {
// 
//    $base = 10;
// }

$base = $argv[1] ?? 10;

for( $lines = 1 ; $lines <= $base; $lines++ ) {

   // echo "$lines : ";

   for( $stars = 0 ; $stars < $lines ; $stars++ ) {

      echo '* ';
   }
   echo "\n";
}

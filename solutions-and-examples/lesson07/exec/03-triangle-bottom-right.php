<?php

$base = $argv[1] ?? 10;

for( $lines = 1 ; $lines <= $base; $lines++ ) {

   // $lines = number of * we need

   $spaces = $base - $lines;

   // echo "We need $spaces spaces and $lines *'s, $spaces + $lines = ". ($spaces + $lines);

   for( $space_counter = 0; $space_counter < $spaces; $space_counter++ ) {

      echo " ";
   }

   for( $stars = 0 ; $stars < $lines ; $stars++ ) {

      echo '*';
   }
   echo "\n";
}

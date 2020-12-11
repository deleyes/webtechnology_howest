<?php

$base = $argv[1] ?? 10;

for( $line_counter = $base; $line_counter > 0 ; $line_counter-- ) {

   // echo "Stars to print: $line_counter";

   for( $stars_counter = 0; $stars_counter < $line_counter; $stars_counter++  ) {

      echo "*";
   }

   echo "\n";
}


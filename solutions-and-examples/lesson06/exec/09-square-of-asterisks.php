<?php

// php 09-square-of-asterisks.php 10
// *********

$stars_per_line = $argv[1] ?? 10;
$lines = $argv[1] ?? 10;

for( $lines_printed = 0; $lines_printed < $lines; $lines_printed++) {

   for( $counter=0; $counter < $stars_per_line; $counter++ ) {

      echo " *";
   }

   echo "\n";
}

/* echo "\n"; */

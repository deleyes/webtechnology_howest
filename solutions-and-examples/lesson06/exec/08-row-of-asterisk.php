<?php

// php 08-row-of-asterisk.php 10
// *********

$nr_of_stars = $argv[1] ?? 10;

for( $counter=0; $counter < $nr_of_stars; $counter++ ) {

   echo "*";
}

echo "\n";

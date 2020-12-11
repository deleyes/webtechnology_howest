<?php

// $count = -1;

$scriptname = array_shift( $argv );

$count = 0;
foreach( $argv as $arg ) {

   $count++;
}

// $count--;

echo "The number of arguments received was $count\n";
echo "The number of arguments received was " . count($argv) . "\n";

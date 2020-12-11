<?php

// print_r($argv);

// for || while

$index = 1;

while( $index < count($argv) ) {

   echo "arg at index $index = $argv[$index]\n";
   $index++;
}

for( $index = 1; $index < count($argv); $index++ ) {

   echo "arg at index $index = $argv[$index]\n";
}

// foreach

$scriptname = array_shift( $argv );

foreach( $argv as $index => $value ) {

   echo "arg at index $index = $value\n";
}

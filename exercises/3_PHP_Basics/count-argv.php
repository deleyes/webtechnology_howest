<?php

//$number=count($argv)-1;
//
//echo "$number arguments were provided";


$script_name = array_shift( $argv );

$count = 0;
foreach( $argv as $value ) {

    $count++;
}

echo "$count arguments where provided\n";

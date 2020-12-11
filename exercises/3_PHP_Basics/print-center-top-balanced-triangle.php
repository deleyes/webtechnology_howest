<?php

$numberOfAsterisks = $height = $argv[1];
$numberOfSpaces = 0;


while( $numberOfAsterisks > 0){

    for ($j = 0; $j < $numberOfSpaces; $j++) {

        echo " ";
    }

    for ($j = 0; $j < $numberOfAsterisks; $j++) {

        echo "*";
    }
    $numberOfAsterisks -= 2;
    $numberOfSpaces++;
    echo"\n";
}

//$asterisks = $argv[1];
//$spaces = 0;
//
//while ($asterisks >= 0) {
//    for ($row = 0; $row < $asterisks; $row++) {
//        for ($col1 = 0; $col1 < $spaces; $col1++) {
//            echo " ";
//        }
//
//        for ($col2 = 0; $col2 < $asterisks; $col2++) {
//            echo "*";
//        }
//
//
//        echo "\n";
//        $spaces++;
//        $asterisks -= 2;
//    }
//}


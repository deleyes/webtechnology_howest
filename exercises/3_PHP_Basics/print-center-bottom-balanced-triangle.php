<?php

$width = $argv[1];
$numberOfSpaces = $width/2;
$numberOfAsterisks = 0;


while( $numberOfAsterisks <= $width ) {

    for ($j = 0; $j < $numberOfSpaces; $j++) {

        echo " ";
    }

    for ($j = 0; $j < $numberOfAsterisks; $j++) {

        echo "*";
    }
    $numberOfAsterisks+= 2;
    $numberOfSpaces--;
    echo"\n";
}


//if ($argv[1] % 2 == 0) {
//    echo "argv[1] deelbaar door 2";
//    $base = $argv[1];
//} else {
//    $base = $argv[1] - 1;
//}
//echo "\$base is: $base \n";
//$rows = $base / 2;
//$space = 3;
//$stars = 2;
//
//for ($row = 0; $row < $rows; $row++) {
//
//    for ($col1 = 0; $col1 < $space; $col1++) {
//        echo " ";
//    }
//
//    for ($col2 = 0; $col2 < $stars; $col2++) {
//        echo "*";
//    }
//
//    for ($col3 = 0; $col3 < $space; $col3++) {
//        echo " ";
//    }
//
//    echo "\n";
//    $space--;
//    $stars+=2;
//}

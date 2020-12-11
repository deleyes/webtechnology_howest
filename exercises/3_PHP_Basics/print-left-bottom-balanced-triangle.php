<?php

//$max_number = $argv[1];
//$temp_max = 1;
//
//for ($row = 1; $row < $max_number; $row++) {
//    for ($col = 0; $col < $temp_max; $col++) {
//        echo "*";
//    }
//    echo "\n";
//    $temp_max++;
//}


$width = $argv[1];


for ($i = 1; $i < $width; $i++) {

    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }

    echo "\n";
}




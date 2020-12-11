<?php

if(count($argv) == 2) {
    for ($row=0; $row<$argv[1]; $row++){
        for($col=0; $col<$argv[1]; $col++){
            echo "*";
        }
        echo "\n";
    }
}
elseif (count($argv) == 3){
    for($row=0; $row<$argv[2]; $row++){
        for($col=0; $col<$argv[1]; $col++){
            echo "*";
        }
        echo "\n";
    }
}


//$width = $argv[1];
//if (array_key_exists(2, $argv)) {
//
//    $height = $argv[2];
//} else {
//
//    $height = $width;
//}
//
//for ($i = 0; $i < $height; $i++) {
//
//    for ($j = 0; $j < $width; $j++) {
//
//        echo "*";
//    }
//    echo "\n";
//}



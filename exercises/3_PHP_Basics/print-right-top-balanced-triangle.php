<?php


$width = $argv[1];


for( $i=$width; $i > 0; $i-- ){

    $spaces = $width - $i;

    for ($j = 0; $j < $spaces ; $j++) {
        echo " ";
    }

    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }

    echo "\n";
}

//$number=$argv[1];
//$asterisks=$argv[1];
//$spaces=0;
//
//for($row=0; $row < $number; $row++){
//     for($col1=0; $col1 < $spaces; $col1++){
//         echo " ";
//     }
//
//     for($col2=0; $col2 < $asterisks; $col2++){
//         echo "*";
//     }
//
//     echo "\n";
//     $spaces++;
//     $asterisks--;
//}
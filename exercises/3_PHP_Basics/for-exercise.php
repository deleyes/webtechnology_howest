<?php

for( $counter = 1; $counter <= 10; $counter++){
    echo "$counter ";
}

echo "\n";

for ( $counter=10; $counter >= 0; $counter--){
    echo "$counter ";
}

echo "\n";

for ($counter=0; $counter<=30; $counter+=3){
    echo "$counter ";
}

echo "\n";

$array= ['one', 'two', 'three', 'four', 'five'];
//print_r($array);

for ($i=0; $i < count($array); $i++){
    echo "index $i:  $array[$i]  \n";
}
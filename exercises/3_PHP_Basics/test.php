<?php

$string = $argv[1];

echo "input: $string  \n";
echo "STATS: \n";

$stringarray = str_split($string);
$frequencies = [];
$count = 0;


foreach ($stringarray as $key => $value) {
    $count++;
    if (!array_key_exists($value, $frequencies)) {
        $frequencies[$value] = 0;
    }
    $frequencies[$value]++;

}

foreach ($frequencies as $key => $value){
    echo "'$key': $value occurences -> " . $value / $count *100 . "%\n";
}

echo "Order by frequentie: \n";

asort($frequencies);

foreach ($frequencies as $key => $value){
    echo "'$key': $value occurences -> " . $value / $count *100 . "%\n";
}

echo "Order by character: \n";

ksort($frequencies);

foreach ($frequencies as $key => $value){
    echo "'$key': $value occurences -> " . $value / $count *100 . "%\n";
}
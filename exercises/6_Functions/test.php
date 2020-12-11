<?php

//echo factorial($argv[1]);
echo factorial(5);

function factorial($number)
{
    $result = $number;
    while ($number > 0) {
        if ($number -1 > 0) {
            $result *= $number - 1;
        }
        $number--;
    }
    return $result;
}
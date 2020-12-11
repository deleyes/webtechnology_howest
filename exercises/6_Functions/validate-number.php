<?php

$nr = $argv[1];

if (check_number($nr)) {
    echo "number ($nr) passed tests\n";
} else {
    echo "number ($nr) failed tests\n";
}


function check_number($nr)
{
    if ($nr > 0 && $nr % 2 == 0 && $nr < 100) {
        return true;
    } else {
        return false;
    }
}
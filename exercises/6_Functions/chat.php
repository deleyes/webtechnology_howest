<?php

returnChat('john', '@jane: Hello');
returnChat('jane', 'Hello john');
returnChat('john', 'Nice weather...');
returnChat('jane', 'Yep it is');


function returnChat($name, $sentence){
    echo "$name -> $sentence\n";
}


<?php

$symb = [ 1, 2, 3, 4, 5 ];
$symb = [ 'A', 'T', 'G', 'C', 'X' ];

for( $count=0; $count < 300 ; $count++ ) {

   //echo rand(0, 4);
   echo $symb[ rand(0, count($symb) - 1) ];
}

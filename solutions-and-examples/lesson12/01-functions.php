<?php

$arr1 = [1,2,3,4,5,6];
$arr2 = [1,2,36];

echo "Arr 1 holds " . mycount( $arr1 ) . " items\n";
echo "Arr 2 holds " . mycount( $arr2 ) . " items\n";

echo span( "This is in is span" );
echo span( "This to" );

// echo " Arr 2 hold $count items\n";

function mycount( $arr ) {

   $count = 0;
   foreach( $arr as $item ) {
      $count++;
   }

   return $count;
}

function span( $string ) {

   return "<span>" . $string . "</span>";
}


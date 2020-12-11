<?php

// Count up or down depending on the specified values
// LG  SM -> Count down from large to small
// SM  LG -> Count up from small to large

$arg1 = $argv[1];
$arg2 = $argv[2];

if( $arg1 < $arg2 ) {

   echo "lets count up...\n";

   $counter = $arg1;
   while( $counter <= $arg2 ) {

      echo "$counter\n";
      $counter++;
   }

}
elseif( $arg1 > $arg2 ) {

   echo "Let's count down...\n";

   $counter = $arg1;
   while( $counter >= $arg2 ) {

      echo "$counter\n";
      $counter--;
   }
}
else {

   echo "Arguments are equal...\n";
}

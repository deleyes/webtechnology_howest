<?php

// Count up or down depending on the specified values
// LG  SM -> Count down from large to small
// SM  LG -> Count up from small to large

$arg1 = $argv[1];
$arg2 = $argv[2];

if( $arg1 < $arg2 ) {

   echo "lets count up...\n";

   for( $counter = $arg1; $counter <= $arg2; $counter++ ) {

      echo "$counter\n";
   }

}
elseif( $arg1 > $arg2 ) {

   echo "Let's count down...\n";

   // for( $counter = $arg1; $counter >= $arg2; $counter--) {
   for( $counter = $arg1; $counter >= $arg2; $counter -= 2) {

      echo "$counter\n";
   }
}
else {

   echo "Arguments are equal...\n";
}

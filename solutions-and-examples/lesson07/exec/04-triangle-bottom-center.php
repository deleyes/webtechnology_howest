<?php

$base = $argv[1] ?? 10;
$nrof_spaces = $base / 2;
$nrof_stars = 0;
$nrof_stars = 1;

while( $nrof_stars <= $base ) {

   /* echo "$nrof_stars"; */

   for( $spaces = 0; $spaces < $nrof_spaces ; $spaces++ ) {

      echo " ";
   }

   for( $stars = 0 ; $stars < $nrof_stars; $stars++ ) {

      echo "*";
   }

   echo "\n";

   $nrof_stars += 2;
   $nrof_spaces--;
}


<?php

if( !isset( $argv[1] ) ) {

   echo "
   USAGE:
      $argv[0] <DNA SEQ>
   ";
   exit;
}

echo "orig.: $argv[1]\n";
echo "comp.: ";

$seq_arr = str_split( $argv[1] );
$invalid_nts = [];

foreach( $seq_arr as $nt ) {

   $nt = strToUpper( $nt );

   /* if( $nt == "A" or $nt == "a" ) { echo "T"; } */
   /* elseif( $nt == "T" or $nt == "t" ) { echo "A"; } */
   /* elseif( $nt == "C" or $nt == "c" ) { echo "G"; } */
   /* elseif( $nt == "G" or $nt == "g" ) { echo "C"; } */

   // if( isset( $translations[$nt] )) {

   //    // echo translation
   // }
   // else {

   //    // store the invalid nt into freq table
   // }

   if( $nt == "A"    ) { echo "T"; }
   elseif( $nt == "T") { echo "A"; }
   elseif( $nt == "C") { echo "G"; }
   elseif( $nt == "G") { echo "C"; }
   else{

      if( !isset($invalid_nts[$nt]) ){
         $invalid_nts[$nt] = 0;
      }
      $invalid_nts[$nt]++;
   }
}

echo "\n";

print_r( $invalid_nts );

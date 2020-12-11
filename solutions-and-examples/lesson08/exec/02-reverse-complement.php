<?php

if( !isset( $argv[1] ) ) {

   echo "
   USAGE:
      $argv[0] <DNA SEQ>
   ";
   exit;
}

echo "orig.: $argv[1]\n";

echo "       ";

$nrof_nts = strlen( $argv[1]);

for( $printed = 0; $printed < $nrof_nts; $printed++ ) {

   echo "|";
}
echo "\n";


echo "comp.: ";

$seq_arr = str_split( $argv[1] );

foreach( $seq_arr as $nt ) {

   // echo "$nt";

   if( $nt == "A" ) { echo "T"; }
   elseif( $nt == "T" ) { echo "A"; }
   elseif( $nt == "C" ) { echo "G"; }
   elseif( $nt == "G" ) { echo "C"; }
}

echo "\n";

echo "comp.: ";
$translations = [
   'A' => 'T',
   'T' => 'A',
   'C' => 'G',
   'G' => 'C',
];
foreach( $seq_arr as $nt ) {

   // echo "$nt";

   echo $translations[$nt];
}

echo "\n";

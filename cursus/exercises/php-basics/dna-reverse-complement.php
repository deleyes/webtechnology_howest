<?php

$orig = $argv[1];
$chars = str_split( $orig );

echo "orig.: $orig\n";
echo 'comp.: ';

foreach( $chars as $nt ) {

   if( $nt == 'A' ) { echo 'T'; }
   elseif( $nt == 'T' ) { echo 'A'; }
   elseif( $nt == 'C' ) { echo 'G'; }
   elseif( $nt == 'G' ) { echo 'C'; }
   else{ die( "unknown nucleotide: $nt\n" ); }
}

?>

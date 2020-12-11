<?php

if( !isset( $argv[1] ) ) {

   echo "
   USAGE:
      $argv[0] <DNA SEQ>
   ";
   exit;
}

$seq = $argv[1];
$nts = str_split( $seq );
$freq = [];
$count = 0;

foreach( $nts as $nt ) {

   // handle nt

   if( !isset($freq[$nt]) ) {
      $freq[$nt] = 0;
   }
   $freq[$nt]++;
   
   $count++;
}

foreach( $freq as $nt => $amount ) {

   echo "$nt: $amount nts -> " . ( ( $amount / $count ) * 100 ) . "%\n";
}

echo "\n";
echo "PLOTS:\n";

foreach( $freq as $nt => $amount ) {

   echo "$nt: ";

   $to_print = ( $amount / $count ) * 50;

   for( $printed = 0; $printed < $to_print ; $printed++ ) {

      echo '=';
   }

   echo "\n";
}

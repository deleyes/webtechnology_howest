<?php

$base = $argv[1] ?? 10;

$nrof_ast = $base;
$nrof_spaces = 0;

// loop
while( $nrof_ast > 0 ) {

   // echo "spaces: $nrof_spaces\n";

   for( $space_printed = 0; $space_printed < $nrof_spaces; $space_printed++ ) {

      echo ' ';
   }

   // echo "asterisks: $nrof_ast\n";
   for( $ast_printed = 0 ; $ast_printed < $nrof_ast ; $ast_printed++ ) {

      echo "*";
   }

   echo "\n";

   // dec $nrof_ast 2 at the time
   $nrof_ast -= 2;

   // inc $nrof_spaces 1 at the time
   $nrof_spaces++;
}

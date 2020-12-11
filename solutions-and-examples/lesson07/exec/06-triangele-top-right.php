<?php

$base = $argv[1] ?? 10;

// create a loop for each row

   // Create a loop prints required spaces
   // Create a loop prints required asterisks

for( $line_counter = $base; $line_counter > 0 ; $line_counter-- ) {

   // echo "Stars to print: $line_counter";

   // $line_counter == $number_of_required_stars
   $spaces_needed_to_indent = $base - $line_counter;

   for( $spaces_counter = 0; $spaces_counter < $spaces_needed_to_indent; $spaces_counter ++) {

      echo " ";
   }

   for( $stars_counter = 0; $stars_counter < $line_counter; $stars_counter++  ) {

      echo "*";
   }

   echo "\n";
}


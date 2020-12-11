<?php

// Read a sequence of numbers from the cli

$numbers = $argv;
$scriptname = array_shift( $numbers );
//print_r($numbers);

$count = 0;
$min = $numbers[0];
$max = $numbers[0];
$sum = 0;
$freq = [];

foreach( $numbers as $index => $number ) {

   // Print these numbers to stdout: index -> value
   echo "number at $index: $number\n";

   // Store the lowest number
   if( $number < $min ) {

      $min = $number;
   }

   // Store the largest value
   if( $number > $max ) {

      $max = $number;
   }

   // Store / increment frequentie

   /* print_r( $freq ); */
   if( !isset( $freq[$number] ) ) {

      $freq[$number] = 0;
      /* print_r( $freq ); */
   }
   $freq[$number]++;
   /* print_r( $freq ); */

   $sum += $number;

   // Increment the amount of numbers
   $count++;
}

// Count the amount of numbers
echo "The number of items in the array: $count\n";

// Calc Min, Max and Avg
echo "The lowest number in the sequence is: $min\n";
echo "The largest number in the sequence is: $max\n";
echo "The sum of the sequence is: $sum\n";
echo "The AVG of the sequence is: " . ( $sum / $count ) . "\n";

// Print numbers frequentie

print_r( $freq );
// foreach

// Bonus1: Print numbers backwards

// Bonus2: Sort numbers and list them.

print_r( $numbers );
// NOT: $sorted_numbers = sort($numbers);
sort( $numbers );
print_r( $numbers );


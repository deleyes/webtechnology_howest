<?php

$counter = 0;

while( $counter < 10  ) {

   echo "Execute this, BTW current value of counter  = $counter\n";

   $counter = $counter + 1;
}

echo "\n\n";

$counter = 1;

while( $counter <= 10  ) {

   echo "Execute this, BTW current value of counter  = $counter\n";

   /* $counter = $counter + 2; */
   /* $counter += 1; */
   $counter++;

   /* $counter = $counter - 2; */
   /* $counter -= 1; */
   /* $counter--; */
}

echo "\n\n";

for( $counter = 0; $counter < 10; $counter++ ) {

   echo "Execute this, BTW current value of counter  = $counter\n";
}

<?php

print_r( explode(":", "part1:part2:part3") );

$arr = [1,2,3];

echo implode( ":", $arr ) . "\n";

echo preg_match("/^>/", "> Fasta Header"). "\n";
echo preg_match("/^>/", "Fasta Header")."\n";

if( preg_match("/^>/", "> Fasta Header") ) {

   // we have a fasta header
}

$string = "Some random string";
print_r( str_split($string) );

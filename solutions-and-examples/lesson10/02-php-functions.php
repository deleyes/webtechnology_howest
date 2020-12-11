<?php

strlen("returns length of a string");

// isset("Test if an variable is defined");

print_r( explode( "\n",
"Line 1
line 2
line 2"
) );

print_r( str_split("Some string") );

print_r( explode( ",", "Part 1, Part 2, Part 3" ) );


var_dump( preg_match("/^>/", "Some input") );
var_dump( preg_match("/^>/", "> Some input") );


var_dump( preg_match("/\d/", "r") );

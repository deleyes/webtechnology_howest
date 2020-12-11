<?php

// if( /* condition here */ ) {
// 
//    // execute this code if condition evaluates to true
// }

if( false ) {

   echo "Condition was met\n";
}
else {

   echo "Condition evaluated to false\n";
}

if( ! false ) {

   echo "Condition evaluated to true\n";
}

$a = 3;
$b = 6;

if( $a < $b ) {

   echo "\$a was less then \$b\n";
}

if( $a == $b ) {

   echo "\$a was equal to \$b\n";
}

/* if( $a = $b ) { */

/*    echo "\$a was equal to \$b\n"; */
/* } */


if( $a > $b ) {

   echo "\$a was more then \$b\n";
}


if( $a < $b ) {

   echo '$a is lesser then $b' . "\n";
}
elseif( $a == $b ) {

   echo '$a is equal to $b' . "\n";
}
elseif( $a > $b ) {

   echo '$a is larger then $b' . "\n";
   echo '$a is larger then $b' . "\n";
   echo '$a is larger then $b' . "\n";
   echo '$a is larger then $b' . "\n";
   echo '$a is larger then $b' . "\n";
}
else {

   echo "Something went very wrong!\n";
}

// if( $a <= $b ) { .... }
// if( $a >= $b ) { .... }
// if( $a == $b ) { .... }
// if( $a != $b ) { .... }

// var_dump( $a );
// var_dump( true );
// var_dump( "" );
// var_dump( "test" );
// 
// 
// var_dump([1,2,3, "string"]);

// var_dump( $a < $b );

// var_dump( "" == 0 );
// var_dump( "" === 0 );
// var_dump( false == 0 );
// var_dump( "" === false );
// var_dump( "1" != 1 );
// var_dump( "1" !== 1 );

var_dump( true and false );
var_dump( true && false );

// true and true == true
// false and true == false
// true and false == false
// false or false == false

var_dump( true or false );
var_dump( true || false );

// true or true == true
// false or true == true
// true or false == true
// false or false == false

var_dump( ( true or false ) or ( true and $a < $b ) );

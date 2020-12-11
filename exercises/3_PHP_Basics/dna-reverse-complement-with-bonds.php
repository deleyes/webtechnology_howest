<?php

//$string=$argv[1];
//echo "orig.: $string\n";
//echo "       ";
//for($i=0; $i < strlen($string); $i++){
//    echo "|";
//}
//echo "\n";
//$string_array=str_split($string);
//echo "comp.: ";
//foreach($string_array as $value){
//    if($value == "A"){echo "T";}
//    elseif($value == "T"){echo "A";}
//    elseif($value == "G"){echo "C";}
//    elseif($value == "C"){echo "G";}
//    else{
//        echo "This is not a nucleotide";
//    }
//}

$orig = $argv[1];
$chars = str_split( $orig );
$length = strlen( $orig );

echo "orig.: $orig\n";
echo '       ';
for( $i=0; $i < $length; $i++) {

    echo "|";
}

echo "\n";
echo 'comp.: ';

foreach( $chars as $nt ) {

    if( $nt == 'A' ) { echo 'T'; }
    elseif( $nt == 'T' ) { echo 'A'; }
    elseif( $nt == 'C' ) { echo 'G'; }
    elseif( $nt == 'G' ) { echo 'C'; }
    else{ die( "unknown nucleotide: $nt\n" ); }
}
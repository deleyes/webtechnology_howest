<?php

//$string=$argv[1];
//echo "orig.: $string \n";
//$string_arr=str_split($argv[1]);
//$new_string_arr=[];
//$new_string="";
//
//for($i=1; $i < strlen($string)-1; $i++){
//    if($string_arr[$i] == 'A'){
//        array_push($new_string_arr, 'T');
//    }
//    elseif ($string_arr[$i] == 'T'){
//        array_push($new_string_arr, 'A');
//    }
//    elseif ($string_arr[$i] == 'G'){
//        array_push($new_string_arr, 'C');
//    }
//    elseif($string_arr[$i] == 'C'){
//        array_push($new_string_arr, 'G');
//    }
//}
//
////print_r($new_string_arr);
//$new_string=implode($new_string_arr);
//echo "comp.: $new_string \n";

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

/* ipv if elses kan je ook een associatieve array maken:
$translations = [
    'A' => 'T',
    'T' => 'A',
    'C' => 'G',
    'G' => 'C' ];

foreach ($seq_arr as $nt) {
    echo $translations[$nt];
}

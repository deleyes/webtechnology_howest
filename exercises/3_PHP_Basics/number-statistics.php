<?php


$script = array_shift($argv);
$numbers = $argv;
$min=$numbers[0];
$max=$numbers[0];
$sum=0;
$count=0;
$occurences=[];

echo "The numbers received: \n";
foreach($numbers as $key => $value){
    echo "number $key: $value \n";

    if($value < $min){
        $min = $value;
    }
    if($value > $max){
        $max = $value;
    }

    $count++;
    $sum += $value;

    if(!isset($occurences[$value])){
        $occurences[$value] = 0;
    }
    $occurences[$value]++;

}

echo "Smallest number: $min \n";
$average = $sum / $count;
echo "Avg: $average \n";
echo "Largest number: $max \n";
echo "Number of numbers: $count \n";
echo "Number occurences \n";
foreach($occurences as $key => $value){
    echo "$key -> $value \n";
}
echo "The numbers in reverse order: \n";
for($i=$count-1; $i >= 0; $i--){
    echo "number $i: $numbers[$i] \n";
}
echo "Numbers from smallest to largest: \n";
sort($numbers);
foreach($numbers as $value){
    echo "$value \n";
}

































//$script = array_shift( $argv );
//$numbers = $argv;
//$count = 0;
//$smallest = $numbers[0];
//$largest = $numbers[0];
//$sum = 0;
//$occurence = [];
//$reverse ='';
//
//# ============================================================================ #
//# print list
//
//echo "The numbers received:\n";
//
//foreach( $numbers as $index => $number ) {
//
//    echo "number $index: $number\n";
////    $reverse = "number $index: $number\n".$reverse;
//
//    if( $number > $largest ) $largest = $number;
//    if( $number < $smallest ) $smallest = $number;
//    $count++;
//    $sum += $number;
//    if( !isset($occurence[$number])) {
//
//        $occurence[$number] = 0;
//    }
//    $occurence[$number]++;
//}
//
//echo "\n";
//echo "Smallest number: $smallest\n";
//echo "Avg: ". $sum / $count ."\n";
//echo "Largest number: $largest\n";
//echo "Number of numbers: $count\n";
//echo "Number occurences\n";
//foreach( $occurence as $number => $times ) {
//
//    echo "\t$number\t->\t$times\n";
//}
//echo "\n";
//
//
//# ============================================================================ #
//# print reverse list
//
//echo "The numbers in reverse order:\n";
//
//for ($i = $count - 1; $i >= 0; $i--) {
//
//    echo "number $i: $numbers[$i]\n";
//}
//
//# ============================================================================ #
//# print reverse list
//
//sort($numbers);
//
//echo "\nNumbers from smallest to largest:\n";
//
//foreach( $numbers as $number ) {
//
//    echo $number."\n";
//}

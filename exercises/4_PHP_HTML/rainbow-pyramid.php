<?php


$colors = [
    'red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'
];
$nr_colors = count( $colors );

for( $j= 1; $j <= $nr_colors; $j++ ) {

    for( $i= 0; $i < $j; $i++ ) {

        echo "<span style=\"color:$colors[$i]\">*</span>";
    }

    echo "<br>";
}


//$color_array = ["red", "orange", "yellow", "green", "blue", "indigo", "violet"];
//
//$count_stars = 1;
//while ($count_stars <= count($color_array)) {
//    for ($row = 0; $row < count($color_array); $row++) {
//        echo "<div>";
//        for ($col = 0; $col < $count_stars; $col++) {
//            echo "<span style='color: $color_array[$col]'>*</span>";
//        }
//
//        echo "</div>";
//        $count_stars++;
//    }
//}
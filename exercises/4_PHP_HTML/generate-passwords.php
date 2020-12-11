<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Generate Passwords</title>
</head>
<body>


<?php
//
//
//$input_str = "0123456789abcdefghijklmnopqrstuvwxyzA-Z$%";
//$input_arr = str_split($input_str);
//print_r($input_arr);
//$nrof_chars_in_pass = 12;
//echo count($input_arr) . "\n";
//$max_index = count($input_arr) - 1; // zero based index
//
//for ($i = 0; $i < $nrof_chars_in_pass; $i++) {
//
//    $index = rand(0, $max_index);
//    echo $input_arr[$index];
//}
//?>


<?php
//if (isset($_POST['submit'])) {
//
//    print_r($_POST);
//    echo "<br>";
//    $characters = $_POST['characters'];
//    $amount = $_POST["amount"];
//
//    $letters = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l",
//        "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
//    $numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
//
//    for ($a = 0; $a < $amount; $a++) {
//        for ($i = 0; $i < $characters; $i++) {
//            if ($_POST["numbers"] == "on") {
//                $random_int_for_letters_numbers = random_int(0, 1);
//                $random_int_for_letters = random_int(0, count($letters));
//                $random_int_for_numbers = random_int(0, 9);
//                if ($random_int_for_letters_numbers == 0) {
//                    echo "$letters[$random_int_for_letters]";
//                } else {
//                    echo "$numbers[$random_int_for_numbers]";
//                }
//            } else {
//                $random_int_for_letters = random_int(0, count($letters));
//                echo "$letters[$random_int_for_letters]";
//            }
//
//        }
//        echo "<br>";
//    }
//}

if (isset($_POST["submit"])) {
    $input_str = "0123456789abcdefghijklmnopqrstuvwxyzA-Z$%";
    $input_str_array = str_split($input_str);
    $chars = $_POST["number_chars"];
    $passwords = [];
    $number_passws = $_POST["number_passws"];
    $password = "";

    for ($i = 0; $i < $number_passws; $i++) {
        for ($j = 0; $j < $chars; $j++) {
            if (isset($_POST["include_numbers"])) {
                $random_integer = rand(0, strlen($input_str) - 1);
                $char = $input_str_array[$random_integer];
                $password = $password . $char;
            } else {
                $random_integer = rand(10, strlen($input_str) - 1);
                $char = $input_str_array[$random_integer];
                $password = $password . $char;
            }

        }
        array_push($passwords, $password);
        $password = "";
    }

    echo "Your passwords are: <br>";

    foreach ($passwords as $pass) {
        echo "$pass <br>";
    }
}

?>

<form action="#" method="post">
    Number of characters :
    <input type="number" value="" name="number_chars">
    <br>
    Include numbers :
    <input type="checkbox" name="include_numbers">
    <br>
    Amount of passwords:
    <input type="number" value="" name="number_passws">
    <br>
    <input type="submit" value="Generate passwords" name="submit">
</form>

</body>
</html>


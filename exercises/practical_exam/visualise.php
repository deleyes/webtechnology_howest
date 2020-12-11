<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MSA</title>
    <style type="text/css">
        .content.seqblock {
            margin-bottom: 10px;
            font-family: monospace;
        }

        .header {
            display: inline-block;
            margin-right: 50px;
        }

        .sequence {
            display: inline-block;
            text-align: right;
        }

        .bar-wrap{
            display: inline-block;
            box-sizing: border-box;
            height: 40px;
            width: 1ch;
            border: lightgrey 0.5px solid;
            position: relative;
        }
        .bar-content{
            box-sizing: border-box;
            background-color: lightgrey;
            position: absolute;
            bottom: 0;
            width: 100%;
        }

    </style>
</head>
<body>

<?php

include("./header.php");

?>

<h1>Visualising MSA for file msa.fasta</h1>

<?php
if (isset($_POST["submit"])) {
    if (!isset($_FILES["file"]) or empty($_FILES["file"]["name"])) {
        die("<a href=\"new_analysis.php\">Please upload a file</a>");
    }
    if (empty($_POST["paste"])) {
        die("<a href=\"new_analysis.php\">Please paste MSA scores</a>");
    }
    if (empty($_POST["number"])) {
        echo "Number was not filled in, defaulting to 50. <br>";
        $number_nts_per_line = 50;
    } else {
        $number_nts_per_line = $_POST["number"];
    }
    if (empty($_POST["A"])) {
        echo "Color for A was not filled in, defaulting to pink. <br>";
        $color_A = "pink";
    } else {
        $color_A = $_POST["A"];
    }
    if (empty($_POST["T"])) {
        echo "Color for A was not filled in, defaulting to lightgreen. <br>";
        $color_T = "lightgreen";
    } else {
        $color_T = $_POST["T"];
    }
    if (empty($_POST["C"])) {
        echo "Color for A was not filled in, defaulting to lightblue. <br>";
        $color_C = "lightblue";
    } else {
        $color_C = $_POST["C"];
    }
    if (empty($_POST["G"])) {
        echo "Color for A was not filled in, defaulting to yellow. <br>";
        $color_G = "yellow";
    } else {
        $color_G = $_POST["G"];
    }

    #-----------------------------------------------------------------------
    $sequences = [];
    $amount_of_loops = 0;
    $counter = 0;

    $scores = explode("\r\n", $_POST["paste"]);

    //make array with headers as key and sequence as value
    $file_content = file($_FILES["file"]["tmp_name"]);
    foreach ($file_content as $line) {
        $line = trim($line);
        if (preg_match("/^>/", $line)) {
            $current_header = $line;
            $counter = 0;
        } else {
            if (!isset($sequences[$current_header])) {
                $sequences[$current_header] = "";
            }
            foreach (str_split($line) as $nt) {
                $sequences[$current_header] .= $nt;
                $counter++;
            }
        }
    }

    $amount_of_loops = round($counter / $number_nts_per_line);
    $start = 0;
    for ($i = 0; $i < $amount_of_loops; $i++) {
        echo "<div class=\"content seqblock\">";
        echo "<table>";
        foreach ($sequences as $header => $sequence) {
            echo "<tr>";
            echo "<td>$header</td>";
            $sequence_array = str_split($sequence);
            echo "<td>";
            for ($j = $start; $j < ($start + $number_nts_per_line); $j++) {
                $color = "";
                if ($sequence_array[$j] == "A") {
                    $color = $color_A;
                }
                if ($sequence_array[$j] == "T") {
                    $color = $color_T;
                }
                if ($sequence_array[$j] == "G") {
                    $color = $color_G;
                }
                if ($sequence_array[$j] == "C") {
                    $color = $color_C;
                }
                echo "<span style=\"background-color:" . $color . "\">$sequence_array[$j]</span>";
            }
            echo "</td>";
            echo "</tr>";

        }

        echo "<tr>";
        echo "<td></td>";
        echo "<td>";
        echo "<div>";
        for($col=$start; $col < ($start + $number_nts_per_line); $col++){
            echo "<div class=\"bar-wrap\">";
            echo "<div class=\"bar-content\" style=\"height:" . ($scores[$col]*100) . "%\">";
            echo "</div>";
            echo "</div>";
        }
        echo "</div>";
        echo "</td>";
        echo "<tr>";
        echo "</table>";
        echo "</div>";
        $start += 50;
    }

}

?>


</body>
</html>

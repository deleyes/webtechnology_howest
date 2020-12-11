<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style type="text/css">
        .error {
            background-color: darkred;
            color: white;
            font-weight: bold;
            padding: 5px;
        }

        tr:nth-child(2n) {
            background-color: lightgrey;
        }

        table {
            border-collapse: collapse;
        }

        th, td {
            text-align: center;
        }


    </style>
</head>
<body>

<?php

include("./header.php");

?>

<h1>Sanitised sequences</h1>

<?php
$errors = [];

if (!isset($_POST["submit"])) {
    echo "<div class=\"error\">Page was accessed without sending data</div>";
    echo "Please correct the issues and resubmit the <a href=\"submit.php\">form</a>";
} elseif (isset($_POST["submit"])) {
    if (!isset($_POST["uploadtype"]) or empty($_POST["uploadtype"])) {
        $errors[] = "<div class=\"error\">Please specify the uploadtype</div>";
    }

    if (!isset($_FILES["file"]) or empty($_FILES["file"]["name"])) {
        if (empty($_POST["paste"])) {
            $errors[] = "<div class=\"error\">Fasta is empty</div>";
        }
    }

    if (empty($_POST["handle_errors"])) {
        $errors[] = "<div class=\"error\">Please specify how DNA errors should be handled(remove or highlight)</div>";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "$error";
        }
        echo "Please correct the issues and resubmit the <a href=\"submit.php\">form</a>";
    } #-----------------------------------------------------------------------
    else {
        $invalid_chars = [];

        $lines = file($_FILES['file']['tmp_name']);
        $fill_line_count = 0;
        foreach ($lines as $line) {
            $line = trim($line);
            if (preg_match('/^>/', $line)) {
                $line_count = 1;
                $current_header = $line;
                $fasta_output[$current_header] = '';
            } else {
                $line_count++;
                $col_count = 0;
                foreach (str_split($line) as $nt) {
                    $col_count++;
                    if ($_POST["handle_errors"] == "highlight") {
                        $color = $_POST["color"];

                        if ($nt == 'G' or $nt == 'g' or $nt == 'C' or $nt == 'c' or
                            $nt == 'A' or $nt == 'a' or $nt == 'T' or $nt == 't' or $nt == ' ') {
                            $fasta_output[$current_header] .= $nt;
                        } else {
                            $fasta_output[$current_header] .= "<span style=\"background-color:$color\">$nt</span>";
                            $invalid_chars[$current_header][$line_count][$col_count] = $nt;
                        }
                        if ($col_count == 80) {
                            $fasta_output[$current_header] .= "<br>";
                        }
                    } elseif ($_POST["handle_errors"] == "remove") {
                        if ($nt == 'G' or $nt == 'g' or $nt == 'C' or $nt == 'c' or
                            $nt == 'A' or $nt == 'a' or $nt == 'T' or $nt == 't' or $nt == ' ') {
                            $fasta_output[$current_header] .= $nt;
                        } else {
                            $invalid_chars[$current_header][$line_count][$col_count] = $nt;
                            continue;
                        }
                        if ($col_count == 80) {
                            $fasta_output[$current_header] .= "<br>";
                        }
                    }

                }

            }
        }
        foreach ($fasta_output as $header => $fasta) {

            echo "<pre>";
            echo "<h3>$header</h3>";
            echo $fasta;
            echo "</pre>";


            echo "<table>";
            echo "<tr>";
            echo "<th># Line</th>";
            echo "<th># Column</th>";
            echo "<th>Character</th>";
            echo "</tr>";

            $invalids = $invalid_chars[$header];
            foreach ($invalids as $line => $column) {
                foreach ($column as $col => $char) {
                    echo "<tr>";
                    echo "<td>$line</td>";
                    echo "<td>$col</td>";
                    echo "<td>$char</td>";
                    echo "</tr>";
                }
            }
            echo "</table>";

            echo "<hr>";
        }


    }//end of no errors
}

?>


</body>
</html>

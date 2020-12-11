<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style type="text/css">
        img {
            float: right;
            width: 500px;
            margin: 1em;
        }

        .leadtext {
            font-size: 1.2em;
        }

    </style>
</head>
<body>

<?php

include("./header.php");

?>

<h1>Welcome to our DNA Sanitiser</h1>

<div>
    <img src="screenshot.png" alt="sanitiser result">
    <p class="leadtext">This application ingests "contaminated" multifasta, sanitizes it and prints it back out.</p>

    <p>Input can be provided by:
    <ol>
        <li>Uploading a multifasta file</li>
        <li>Pasting some fasta sequences</li>
    </ol>

    The input can be sanitised by:
    <ul>
        <li>either highlighting the invalid characters</li>
        <li>or removing the contaminations altogether</li>
    </ul>

    Additionally, a list with the coordinates (line number and column number) is displayed for each
    sequence...</p>

    <p><a href="submit.php">Let's go clean our sequences</a></p>
</div>


</body>
</html>


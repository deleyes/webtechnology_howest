<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MSA</title>
    <style type="text/css">
               input[type=text]{
            margin-bottom: 10px;
        }
        textarea {
            height: 200px;
            width: 800px;
        }
        input[type=submit] {
            display: block;
            width: 98%;
            margin: auto;
            font-weight: bold;
            font-size: 1.2em;
            border-radius: 5px;
            margin-top: 10px;
        }

    </style>
</head>
<body>

<?php

include("./header.php");

?>

<h1>Submit new visualisation</h1>

<form action="visualise.php" method="post" enctype="multipart/form-data">
    <div class="content">
        <div>
            <label for="file">Select the MSA file to process</label>
            <br>
            <input id="file" type="file" name="file">
        </div>
        <br>
        <div>
            <label>Paste your MSA scores:<br>
            <textarea name="paste"></textarea>
            </label>
        </div>
        <br>
        <div>
            <label>A:
            <input type="text" name="A" value="pink">
            </label>
            <br>
            <label>T:
                <input type="text" name="T" value="lightgreen">
            </label>
            <br>
            <label>C:
                <input type="text" name="C" value="lightblue">
            </label>
            <br>
            <label>G:
                <input type="text" name="G" value="yellow">
            </label>
            <br>
        </div>
        <br>
        <div>
            <label>Number of nucleotides to show per line:</label>
            <br>
            <input type="number" name="number" value="50">
        </div>


    </div>

    <input type="submit" name="submit" value="Submit and visualise">


</form>


</body>
</html>
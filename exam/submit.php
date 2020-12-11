<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style type="text/css">
        input[type=text] {
            margin-bottom: 10px;
        }

        textarea {
            height: 200px;
            width: 600px;
        }

        .section {
            border-left: steelblue 5px solid;
            padding-left: 10px;
        }

        .betweensections{
            height: 40px;
            border: none;
        }

        input[type=submit] {
            margin-top: 20px;
        }

    </style>
</head>
<body>

<?php

include("./header.php");

?>

<h1>Submit some (multi)Fasta to sanitise...</h1>

<form action="sanitise.php" method="post" enctype="multipart/form-data">
    <div class="section">
        <div>
            <input type="radio" name="uploadtype" value="upload" id="file">
            <label for="file">Upload a (multi)fasta file :</label>
            <br><br>
            <input type="file" name="file">
        </div>
        <br>
        <div>
            <input type="radio" name="uploadtype" value="paste" id="paste">
            <label for="paste">Paste some (multi)fasta sequences<br>
                <textarea name="paste"></textarea>
            </label>
        </div>
    </div>

    <div class="betweensections"></div>

    <div class="section">
        <input type="radio" name="handle_errors" value="highlight" id="highlight">
        <label for="highlight">Highlights errors in</label>
        <select name="color">
            <option value="red">red</option>
            <option value="orange">orange</option>
            <option value="yellow">yellow</option>
            <option value="green">green</option>
            <option value="blue">blue</option>
            <option value="indigo">indigo</option>
            <option value="violet">violet</option>
        </select>
        <br>
        <input type="radio" name="handle_errors" value="remove" id="remove">
        <label for="remove">Or remove them.</label>
    </div>

    <input type="submit" name="submit" value="Sanitise the sequences">


</form>


</body>
</html>
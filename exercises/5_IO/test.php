<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test</title>
    <style type="text/css">

    </style>
</head>
<body>

<form action="#" method="post" enctype="multipart/form-data">

    <label>Select file:<br>
        <input type="file" name="upload">
    </label>
    <br>
    <label for="area">Paste words to highlight </label><br>
    <textarea id="area" name="paste" rows="4" cols="40"></textarea>
    <br>
    <input type="submit" name="submit" value="Submit Query">

</form>

<?php
if (isset($_POST["submit"])) {
    if (!isset($_FILES["upload"]) || $_FILES["upload"]["error"] !== 0) {
        die("Error while uploading file");
    }
    if (!isset($_POST["paste"]) or empty($_POST["paste"])) {
        die("No pasted words to highlight");
    }

    #-------------------------------------------------------------------------
    $file_lines = file($_FILES["upload"]["tmp_name"]);
    $words_to_highlight = explode("\n", $_POST["paste"]);

    foreach ($file_lines as $line) {
        $line = trim($line);
        $words = explode(" ", $line);
        foreach ($words as $word) {
            $wordtrimmed = trim($word,".");
            foreach ($words_to_highlight as $word_to_highlight) {
                $wordandcolorhighlight = explode("|", $word_to_highlight);
                $wordhighlight = $wordandcolorhighlight[0];
                $colorhighlight = $wordandcolorhighlight[1];
                if ($wordtrimmed == $wordhighlight) {
                    $word = "<span style=\"background-color: $colorhighlight;\">$word</span>";
                }
            }
            echo "$word ";
        }
        echo "<br>";
    }

}


?>


</body>
</html>


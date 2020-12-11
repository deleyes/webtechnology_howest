<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>snippetsssss</title>
    <style type="text/css">
        .content{
            border-left: grey solid 10px;
            margin-left: 10px;
            padding: 5px;
        }
    </style>
</head>
<body>

<?php

if(isset($_GET["file"])){
    $file_name = $_GET["file"];
    echo "<a href=\"index.php\"><< Back to index</a>";

    echo "<h3>";
    echo "Contents of snippet `" . $file_name . "`:";
    echo "</h3>";

    echo "<div class=\"content\">";
    $file_content_lines = file("store/$file_name");
    foreach ($file_content_lines as $line){
        echo "$line";
    }
    echo "</div>";
}

?>

</body>
</html>

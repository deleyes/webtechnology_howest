<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>snippetsssss</title>
    <style type="text/css">
    </style>
</head>
<body>

<h1>Welcome to snippets</h1>

<h2><a href="new-snippet.php">+ Create new snippet</a></h2>

<h2>All snippets</h2>

<?php

$handle = opendir("store");
$file_array = glob("store/*");
echo "<ul>";
foreach($file_array as $file){
    $file = basename($file);
    echo "<li>";
    echo "<a href=\"show.php?file=$file\">$file</a>";
    echo "</li>";
}
echo "</ul>";

?>


</body>
</html>

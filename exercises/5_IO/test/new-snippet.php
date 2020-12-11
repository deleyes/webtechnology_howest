<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Format fasta</title>
    <style type="text/css">
    </style>
</head>
<body>

<form action="#" method="post" enctype="multipart/form-data">
<label>Snippet name:<br>
    <input type="text" name="snippet_name" value="">
</label>
<br>
<label>
    Content:<br>
    <textarea name="content" rows="4" cols="40"></textarea>
</label>
<br>
<input type="submit" name="submit" value="submit snippet">

</form>

<?php
$errors = [];
if(isset($_POST["submit"])){
    $snippet_name = $_POST["snippet_name"];
    $snippet_content = $_POST["content"];


    if(empty($snippet_content)){
        $errors[] = "snippet content is empty !";
    }

    if(empty($snippet_name)){
        $errors[] = "snippet has no name !";
    }

  if(file_exists("store/$snippet_name")){
      $errors[] = "snippet name already exists";
  }

    if(empty($errors)){
        file_put_contents("./store/$snippet_name", $snippet_content);
    } else {
        echo "There are errors: <br>" ;
        foreach ($errors as $error){
            echo "$error";
        }
    }
}

?>


</body>
</html>

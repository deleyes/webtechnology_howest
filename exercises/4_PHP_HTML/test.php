<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test</title>
    <style type="text/css">
        .error{
            color: red;
        }
        input.error{
            border: red solid 1px;
        }
        .post {
            color: grey;
        }
    </style>
</head>
<body>


<?php
$errors=[];
$name = "";

if (isset($_POST["submit"])) {
    $errors = [];

    if (!isset($_POST["anonymous"])) {
        if (empty($_POST["name"])) {
            $errors['name'] = 'error';
            echo "<div class=\"error\">Please provide a name. </div><br>";
        }
        if (empty($_POST["email"])) {
            $errors['email']= "error";
            echo "<div class=\"error\">Please provide an email address. </div><br>";
        }
    }

    $text = $_POST["text"];
    if (strlen($text) > 500) {
        $errors["text"]="error";
        echo "<div class=\"error\"> Comment can not have more than 500 chars </div><br>";
    }

    if(empty($errors)){
        if($_POST["anonymous"]){
            $name = "Anonymousssss";
        } else {
            $name = $_POST["name"];
        }

        echo "<hr>";
        echo "<div>" . $_POST["title"] . " " . $name . " posted:</div>";
        echo "<div class=\"post\">" . $_POST["text"] . "</div>";
    }


}


?>
<form action="#" method="post">
    <label>Name:
        <input type="text" name="name" value="<?=$name?>" class="<?=$errors["name"]?>">
    </label>
    <br>
    <label>Email:
        <input type="email" name="email" value="" class="<?=$errors["email"]?>">
    </label>
    <br>
    <label>Title:
        <select name="title">
            <option>Dr.</option>
            <option>Mr.</option>
            <option>Ms.</option>
            <option>Dr.</option>
        </select>
    </label>
    <br>
    <label>Comment:
        <textarea name="text"></textarea>
    </label>
    <br>


    <input id="anonymous" type="checkbox" name="anonymous">
    <label for="anonymous">Post anonymous</label>
    <br>
    <input type="submit" name="submit" value="submit">

</form>




</body>
</html>

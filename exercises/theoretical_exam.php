<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style type="text/css">
        .lead{
            font-size: 1.5em;
        }
        .main p:last-child{
            margin-bottom: 15px;
        }
        .footer:hover{
            font-weight: bold;
        }
    </style>
</head>
<body>

<h1>Green Document</h1>

<div class="main">
    <p class="lead">
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
        sed diam nonumy eirmod
    </p>

    <p>
        tempor invidunt ut labore et dolore magna aliquyam erat,
        sed diam voluptua. At
    </p>

    <p>
        vero eos et accusam et justo duo dolores et ea rebum.
        Stet clita kasd gubergren,
    </p>
</div>


<div class="footer">
    <p>
        no sea takimata sanctus est Lorem ipsum dolor sit amet.
    </p>
</div>

<?php
$q4 = 12 % 3 == '4';
$q5 = empty(10) === (false == true);
$q6 = '' !== true;

?>


</body>
</html>
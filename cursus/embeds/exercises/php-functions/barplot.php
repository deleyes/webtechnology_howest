<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Horizontale Barplot</title>
   <style type="text/css">
      .plotwrap {

         border-left: solid gray 2px;
         border-bottom: solid gray 2px;
         padding: 15px;
         margin: 50px;
         display: inline-block;
         position: relative;
      }
      .bar {
         box-sizing: border-box;
         background: lightblue;
         border: solid gray 1px;
         text-align: right;
         line-height: 1.5em;
      }
      .scale {
         box-sizing: border-box;
         border: solid #ddd 1px;
         width: 500px;
         margin: 5px;
      }

      .x-axis-label {

         position: absolute;
         left: 50%;
         bottom: -25px;
      }

      .y-axis-label {

         position: absolute;
         left: -25px;
         top: 50%;
      }

   </style>
</head>
<body>

   <h2>Horizontale Barplot</h2>

   <div class="plotwrap">

      <div class="y-axis-label">Y</div>
      <div class="x-axis-label">X</div>

      <?php
      bar('25%');
      bar('15%');
      bar('50%');
      bar('80%');
      ?>
   </div>

</body>
</html>

<?php

function bar( $width ) {

	echo '<div class="scale">';
   	echo '<div class="bar" style="width: '.$width.';">';
            echo $width;
      echo '</div>';
   echo '</div>';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>L9E03: Subscribe Form</title>
   <style type="text/css">
   div {

      margin: 1em;
   }
   </style>
   
</head>
<body>

   <h1>Fill in the form to subscribe to the service</h1>

<pre>
<?php

// print_r( $_GET );

?>
</pre>

<?php

if( ! isset( $_POST['submit'] ) ) {

?>

   <!-- <form action="03-subscribe-form.php" method="get"> -->
   <form action="#" method="post">
<!-- http://localhost:8080/03-subscribe-form.php?first_name=a&last_name=b&gender=male&email=me%40mail.com&password=secret&repeat=secret&submit=Submit+Form# -->

<!-- http://localhost:8080/03-subscribe-form.php# -->
   
      <div>
         First Name: <input type="text" name="first_name" value="">
      </div>
      
      <div>
         Last Name: <input type="text" name="last_name" value="">
      </div>
      
      <div>
         Male: <input type="radio" name="gender" value="male">
         Female: <input type="radio" name="gender" value="female">
      </div>
      
      <div>
         Email Address: <input type="email" name="email" value="">
      </div>
      
      <div>
         Password: <input type="password" name="password" value="">
      </div>
      
      <div>
         Repeat: <input type="password" name="repeat" value="">
      </div>
      
      <div>
         <input type="checkbox" name="subscribe" value="">
         I want updates
      </div>
      
      <div>
         <input type="submit" name="submit" value="Submit Form">
      </div>
   </form>

<?php
}
else {

   echo "<ul>";

   foreach( $_POST as $name => $value ) {

      echo "<li>";
         echo "<b>";
            echo "$name";
         echo ":</b> ";
         echo $value;
      echo "</li>";

   }

   echo "</ul>";

   echo '<a href="03-subscribe-form.php">Re-fill form</a>';
}
?>

</body>
</html>

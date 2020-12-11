<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Welcome</title>
   <link rel="stylesheet" href="styles.css">
   
</head>
<body>

   <?php include( "navbar.php") ?>
   
   <h1>Submit new analysis</h1>

   <form action="analayse.php" method="post" enctype="multipart/form-data">

      <input type="file" name="file" value="">
      

      <input class="submit" type="submit" value="Analyse" name="submit">
   </form>
   
   
</body>
</html>

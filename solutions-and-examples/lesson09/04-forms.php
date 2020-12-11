<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Forms</title>
</head>
<body>

<pre>
<?php

print_r( $_GET );

?>
</pre>

   <!-- http://localhost:8080/04-forms.php?first_input=value -->
   <!-- http://localhost:8080/04-forms.php?first_input=DEFAULT -->
   <!-- http://localhost:8080/04-forms.php?first_input=some+random+string -->
   <form action="04-forms.php" method="get">

      <ul>
         <li>
            <input type="text" name="first_input" value="DEFAULT">
         </li>
         <li>
            <input type="checkbox" name="subscribe" value="yes" checked>
            Do you want to subscribe
         </li>
         <li>
            Gender
            <input type="radio" name="gender" value="male" checked>
            Male
            <input type="radio" name="gender" value="female">
            Female
         </li>
         <li>
            <input type="email" name="email" value="">
         </li>
         <li>
            <input type="tel" name="email" value="">
         </li>
         <li>
            <input type="password" name="pas" value="">
         </li>
         <li>
            <input type="submit" name="submit" value="submit">
         </li>
         <li>
            <input type="file" name="fasta" value="submit">
         </li>
         
      </ul>
      

   </form>
   
   
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>L10E01: Parrot</title>
</head>
<body>

<?php

// print_r( $_POST );

$words_to_store = $_POST['stored_words'] ?? '';

$words_to_store .= $_POST['new_word'] ?? '';

$words_to_store .= ' ';

?>

   <form action="#" method="post">

   <div>
      Enter a word:
      <input type="text" name="new_word" value="">

      <input type="submit" value="Submit new word" name="submit">
      
      <input type="hidden" name="stored_words" value="<?= $words_to_store ?>">
   </div>
   
   </form>
   
<?php
if( isset($_POST['submit']) ) {

   echo "We have received data, the new word is: <strong>" . $_POST['new_word'] . "</strong>";

   echo "<br>";

   echo "The complete sentence: " . $words_to_store;
}

?>
   
</body>
</html>

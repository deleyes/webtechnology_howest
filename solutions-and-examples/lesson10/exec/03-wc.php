<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>L10E3: WC</title>
   <style type="text/css">
   textarea {

      width: 300px;
      height: 100px;
   }
   </style>
   
</head>
<body>

   <p>
      Count the number of lines, words and characters in an uploaded blob of text
   </p>
   
   <form action="#" method="post">
   
      <div>
         Please paste text here:
      </div>
      <div>
         <textarea name="text"></textarea>
      </div>
      <div>
         <input type="submit" value="Upload Text" name="do_upload">
      </div>
      

   </form>

<pre>
<?php

// print_r( $_POST );

if( isset($_POST['do_upload']) ):

   $lines = explode("\n", $_POST['text']);

   // print_r( $lines );

   $nrof_lines = 0;
   $nrof_words = 0;
   $nrof_chars = 0;
   foreach( $lines as $line ) {

      $words = explode( ' ', $line);
      // print_r( $words );
      foreach( $words as $word ) {

         if( empty($word) ) {

            continue;
         }
         $nrof_words++;

         $nrof_chars += strlen($word);
      }
      $nrof_lines++;
   }

?>
</pre>

<ul>
   <li>The number of lines in the input is: <?= $nrof_lines ?></li>
   <li>The number of words in the input is: <?= $nrof_words ?></li>
   <li>The number of characters in the input is: <?= $nrof_chars ?></li>
</ul>

<?php

endif;

// if( $cond ) {
// 
//    // do stuff
// }
// 
// if( $cond) :
// 
//    // do stuff
// endif

?>

</body>
</html>

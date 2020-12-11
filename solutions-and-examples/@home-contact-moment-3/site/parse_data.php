<pre>
<?php

print_r( $_GET );

if( isset($_GET['subscribe'])) {

   // handle subr...
}

if( isset($_GET['submit']) ) {
   /* echo "Age is: $_GET[age]\n"; */
   echo "We know data was sent to this page...\n";
}
else {

   echo "Page accessed without data....\n";
}
?>
</pre>

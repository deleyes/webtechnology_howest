<pre>
<?php

print_r( $_POST );

print_r( $_FILES );

echo $_FILES['some-file']['tmp_name'] . "\n";

// $file_data = file_get_contents( $_FILES['some-file']['tmp_name']);
// print_r( explode("\n", $file_data) );

$lines = file( $_FILES['some-file']['tmp_name']);

foreach( $lines as $line ) {

   $line = trim( $line );
   echo ">>>$line<<<\n";
}

?>
</pre>

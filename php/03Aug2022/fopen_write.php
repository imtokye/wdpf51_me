<?php 

$file = "myfile.txt";
$fh = fopen($file, "w");

fwrite($fh, "I want to write something");
echo "\n";
fwrite($fh, "I want to write something");
echo "\n";
fwrite($fh, "I want to write something");
echo "\n";

$file =file($file);

print_r($file);


fclose($fh);


?>
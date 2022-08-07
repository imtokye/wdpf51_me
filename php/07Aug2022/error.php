<?php 

fopen("file.txt", 'r');

$error = error_get_last();

print_r($error);



?>
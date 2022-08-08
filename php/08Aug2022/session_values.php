<?php 
session_start();

print_r($_SESSION);
$_SESSION['name'] = "Tokye";
$_SESSION['age'] = 29;

//unset($_SESSION['age']);

session_destroy();



?>
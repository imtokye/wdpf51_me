<?php 

$str = "Hello World, How are you with giving extra amount in oil?";
$lower = strtolower($str);
echo "All in lowercase: $lower <br>";
$ucfirst = ucfirst($lower);
echo "First letter in uppercase: $ucfirst <br>";

$ucwords = ucwords($lower);
echo "All First letter in uppercase: $ucwords <br>";

$uppers = strtoupper($lower);
echo "All First letter in uppercase: $uppers <br>";



?>
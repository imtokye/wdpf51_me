<?php 
$number =100;
$string ="Hello World";

echo gettype($number);
echo "<br>";
echo gettype($string);
echo "<br>";
echo is_integer($string);
echo "<br>";
echo is_int($number);
echo "<br>";

$yes = true;
echo "Boolean: ". is_bool($yes);
echo "<br>";

$number =[10,20,30,40];
echo "Scalar: ". is_scalar($string);

?>
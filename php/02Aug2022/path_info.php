<?php 
$path = "D:\xampp\htdocs\WDPF_51_1269797\php\02Aug2022\myfile.txt";


$output = pathinfo($path);

echo "<pre>";

print_r($output);

echo $output['dirname']; 
echo "<br>";
echo $output['basename']; 
echo "<br>";
echo $output['filename']; 
echo "<br>";
echo $output['extension']; 


?>
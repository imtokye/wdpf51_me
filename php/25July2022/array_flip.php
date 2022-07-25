<?php 
$cities = ["Dhaka", "Pabna", "Rangpur", "Barishal", "Khulna", "Bogura"];

echo "<pre>";
print_r($cities);

$result = array_flip($cities);
print_r($result);

?>
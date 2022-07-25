<?php 
$cities = ["Dhaka", "Khulna", "Rangpur", "Dhaka", "Khulna"];

$stateFrequency = array_count_values($cities);

echo "<pre>";
print_r($stateFrequency);


?>
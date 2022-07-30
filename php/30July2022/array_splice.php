<?php 

$districts = array("Dhaka","Comilla","Noakhali","Barishal", "Khulna","Pabna", "Narsindi");

$subset = array_splice($districts, 3,2, array("Narail", "Jessore"));
echo "<pre>";
print_r($districts);
print_r($subset);

// $subset = array_splice($districts, -3);//total length (7)-3
// echo "<pre>";
// print_r($subset);


// $subset = array_splice($districts, 3, 2);
// echo "<pre>";
// print_r($subset);
?>
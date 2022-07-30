<?php 

$countries = array(
    "Bangladesh"=>"Dhaka",
    "India"=>"New Delhi",
    "Nepal"=>"Katmundu",
    "England"=>"London",
    "France"=>"Paris"
);

$randomed = array_rand($countries, 2);

print_r($randomed);

?>
<?php
$distance =200;
$place = "Padma Bride";

printf("Dhaka to %s is total %d km", $place, $distance );

?>

<?php
$meal = "Bakorkhani";
$price = 180.00;
echo "<br>";
printf("Today's %s price is Taka%.2f", $meal, $price);
echo "<br>";
$output= sprintf("Today's %s price is Taka%.2f", $meal, $price);
echo $output
?>
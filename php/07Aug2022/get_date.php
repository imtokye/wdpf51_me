<?php 

$time = time();

$result = getdate(1659865431);
echo "<pre>";
print_r($result);


echo "Today's day is ". $result['mday'] . "Month is " .$result ['month'];

echo "<pre>";

echo date("Y-m-d h:m:s a", time());




?>
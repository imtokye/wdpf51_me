<?php 
$spots =array("Ahsan Manjil", "Lalbag Fort", "Sonargoan", "Buriganga");

echo current($spots);  echo "<br>";
next($spots);
echo current($spots);  echo "<br>";
prev($spots);
echo current($spots);  echo "<br>";
end($spots);
echo current($spots);  echo "<br>";
reset($spots);
echo current($spots);  echo "<br>";


?>
<?php 

// $str1 ="Abcd";
// $str2 ="Abcd";

// echo strcmp($str1,$str2);

?>
<?php
 $pswd = "supersecret";
 $pswd2 = "supersecret2";
 if (strcmp($pswd, $pswd2) != 0) {
 echo "Passwords do not match!";
 } else {
 echo "Passwords match!";
 }
?>

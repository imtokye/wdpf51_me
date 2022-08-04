<?php 

$line = "vims is the greatest word processor ever created! Oh vim,how i love thee!";

echo preg_match("/vim/i", $line, $matches);

print_r($matches);

?>
<hr>
<?php
 $userinfo = "Name: <b>Zeev Suraski</b> <br> Title: <b>PHP Guru</b>";
 preg_match_all("/<b>(.*)<\/b>/U", $userinfo, $pat_array);
 echo "<pre>";
 print_r($pat_array);
?>
<?php 

$file = "myfile.txt";
$fh = fopen($file, "r");

//print_r($fh);
//echo fgets($fa);

while(!feof($fh)){
    echo fgets($fh). "<br>";
}

fclose($fh);


?>
<hr>
<?php 

$file = "myfile.txt";
$fh = file($file);



print_r($fh);


?>
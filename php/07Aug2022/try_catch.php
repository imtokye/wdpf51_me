<?php 

try {
    $fh = fopen("contacts.txt", "r");
    if (! $fh) {
    throw new Exception("Could not open the file!");
    }
   } catch (Exception $error) {
    // echo "Error (File: ".$e->getFile()."<br>, line ".
    // $e->getLine()."<br>): ".$e->getMessage();


    echo $error->getMessage();
   }



?>



<?php 

try {
    $fh = require("contacts.php", "r");
    if (! $fh) {
    throw new Exception("Could not open the file!");
    }
   } catch (Exception $error) {
    // echo "Error (File: ".$e->getFile()."<br>, line ".
    // $e->getLine()."<br>): ".$e->getMessage();


    echo $error->getMessage();
   }

   echo "Hello. This line shows that PHP working fine after fatal error";


?>
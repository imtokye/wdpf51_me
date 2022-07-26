<?php

$countries = array(
    "Bangladesh"=>"Dhaka",
    "India"=>"New Delhi",
    "Nepal"=>"Katmundu",
    "England"=>"London"
    ,"France"=>"Paris"
);
 asort($countries);
// echo "<pre>";
// print_r($countries);
?>
<table border="1">
<tr><th>Country Name</th><th>Capital</th></tr>


<?php
foreach($countries as $country=>$capital){ ?>
 <tr><td><?php echo $country ?></td>
    <td><?php echo $capital ?></td>

 </tr>
 
 <?php
}
 ?>
 </table>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $countries=array(
        "Bangladesh"=>"Dhaka",
        "Pakistan"=>"Islamabad",
        "India"=>"New Delhi",
        "England"=>"London",
        "Nepal"=>"Katmundu"
    );

    ksort($countries);
    
    ?>


<?php
    echo "<table border='1'>
        <tr>
            <th>Country</th>
            <th>Capital</th>
       </tr>";
       
        foreach($countries as $country=>$capital){
       echo "<tr>
            <td>$country</td>
            <td>$capital</td>
        </tr>";

        }

    echo "</table>";
    ?>
</body>
</html>
<?php
    $players =array();
    $players["Bangladesh"] =array("Tamim", "Sakib", "Rahim");
    $players["Srilanka"] =array("Sangakara", "Dilshan", "Mahela");
    $players["Australia"] =array("Maxwell", "Werner", "Smith");

    // echo "<pre>";
    // print_r($players);

    foreach($players as $country=> $player){
    echo "<h1>$country</h1>";
  
    foreach($player as $pl){
        echo $pl . "&nbsp";
    }
    echo "<br>";
}
?>
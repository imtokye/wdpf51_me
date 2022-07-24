<?php 
    // $file =file("users.txt");
    // echo "<pre>";
    // print_r($file);
    $users =file("users.txt");

foreach($users as $user){
    list($usr1, $usr2, $usr3, $usr4,)=explode("|", $user);

    echo "Name: $usr1<br>";
    echo "Name: $usr2<br>";
    echo "Name: $usr3<br>";
    echo "Name: $usr4<br>";
    echo "<hr>";
}



?>
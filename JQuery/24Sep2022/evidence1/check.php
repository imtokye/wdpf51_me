<?php
//include('dbconfig.php');
$db = new mysqli("localhost", "root", "", "wdpf51");

$email= $_GET['email'];
$pass= $_GET['pass'];
$pass = md5($pass);

$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";
$result = $db->query($sql);

if($result->num_rows==1){
    echo "<span class='green'>Valid user</span>";
     
}else {
    echo "<span class='red'>Inalid user</span>";
}

?>
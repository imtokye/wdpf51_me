<?php
$db = new mysqli("localhost","root","","wdpf51");

$email= $_POST['email'];
$pass= $_POST['password'];
$pass = md5($pass);

$sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
$result = $db->query($sql);

if($result->num_rows>0){
    echo "Login Successfull";
}else{
    echo "Login Invalid";
}




?>
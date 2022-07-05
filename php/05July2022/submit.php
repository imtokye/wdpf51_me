<?php 
    // echo "<pre>";
    print_r($_REQUEST);

    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pswd'];
    echo "You wanted to login with your email {$email} and password {$pass}";
    
    echo "<pre>";
    print_r($GLOBALS);
    ?>
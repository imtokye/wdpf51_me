<?php
 // Initiate session and create a few session variables
 session_start();
 // Set a few session variables.
 $_SESSION['username'] = "Tokye";
 $_SESSION['loggedon'] = date("M d Y H:i:s");
 // Encode all session data into a single string and return the result
//  session_destroy();

 $Vars = session_encode();
 echo $Vars;
?>
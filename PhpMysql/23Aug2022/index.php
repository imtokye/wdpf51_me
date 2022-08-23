<h1>Login Form</h1>
<form action="checkuser.php" method="post">
Email:<br> <input type="email" name="email" placeholder="Enter your email"><br>
Password:<br> <input type="password" name="pass" placeholder="Enter your pasword"><br>
<input type="submit" name="submit" value="Login">
    
</form>
<?php 
// session_start();
// echo $_SESSION['msg'];
if(isset($_GET['m'])){
    $msg = $_GET['m'];
    echo $msg;
}



?>
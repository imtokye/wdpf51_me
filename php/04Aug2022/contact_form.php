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
extract($_POST);
$to = "imtokye@gmail.com";
if(mail($to, $subject, $message)){
    echo "Sent successfully";
}

?>

    <h2>Contact with us</h2>
    <form action="" method="post">
        <input type="text" name="email" placeholder="Enter your email"><br>
        <input type="text" name="name" placeholder="Enter your name"><br>
        <input type="text" name="subject" placeholder="Enter Subject"><br>
        <textarea name="message" placeholder="enter your message" id="" ></textarea><br>
        <input type="submit" name="submit" value="SEND"><br>
        </form>
    
</body>
</html>
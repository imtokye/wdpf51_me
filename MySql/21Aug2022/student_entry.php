<?php $db = new mysqli('localhost', 'root','', 'wdpf51'); ?>
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
if(isset($_POST['submit'])){
    extract($_POST);

    $sql = "INSERT INTO students  VALUES ('$id', '$name', '$email', '$phone')";
    $db->query($sql);
     if($db->affected_rows>0){
        echo "Successfully inserted";
    }
}


?> 

    <h1>Student Entry System</h1>
    <form action="" method="post">
    ID:<br><input type="number" name="id" placeholder="Enter ID"><br>
    Name:<br><input type="text" name="name" placeholder="Enter Name"><br>
    Email:<br><input type="email" name="email" placeholder="Enter Email"><br>
    Phone:<br><input type="text" name="phone" placeholder="Enter Phone Number"><br>
    <br><input type="submit" name="submit" value="SUBMIT">
    </form>

    <?php 
    // $id = $_POST['id'];
    // $name = $_POST['name'];
    // $email = $_POST['email'];
    // $phone = $_POST['phone'];

    // echo $id;
    // echo  $name;
    // echo $email;
    // echo $phone;
    

    
    ?>


<a href="student_list.php">Show Data</a>
</body>
</html>
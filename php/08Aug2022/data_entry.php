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
   
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email= $_POST['email'];
    $number= $_POST['number'];
   

    $total =$id." ".$name." ".$email." ".$number."\n";


    $file =fopen("data.txt", "a");
    fwrite($file, $total);



}

?>
    <form action="" method="post" >
        <input type="text" name="id" placeholder="Enter your id"><br>
        <input type="text" name="name" placeholder="Enter your name"><br>
        <input type="text" name="email" placeholder="Enter your email"><br>
        <input type="text" name="number" placeholder="Enter your number"><br>
        <input type="submit" name="submit" value="Submit" >
    </form>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>NUMBER</th>

        </tr>
    

    

    <?php 
    $file1 = file("data.txt");
    foreach($file1 as $line){
        list($id1, $name1, $email1, $number1) = explode(" ", $line);
        echo "<tr>

        <td>$id1</td>
        <td>$name1</td>
        <td>$email1</td>
        <td>$number1</td>
        
        <tr>";
    }
    
    ?>

</table>
    
</body>
</html>



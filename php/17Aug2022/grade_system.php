<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Grade System</h1>
    <form action="" method="post">
        <input type="text" name="marks" placeholder="Enter your number">
        <input type="submit" name="submit" value="Check">
    </form>

<?php
  
  if(isset($_POST['submit'])){

    $n = $_POST['marks'];
    echo gradeCheck($n);
  }
  
  function gradeCheck($n){
    if($n >=90){
        return " <h1>You will get A+</h1>";
     }
     else if($n>=80){
      return " <h1>You will get A</h1>";
     }else if($n>=60){
        return " <h1>You will get A-</h1>";
       }else if($n<60){
        return " <h1>You will get F</h1>";
       }
}
    


?>
</body>
</html>
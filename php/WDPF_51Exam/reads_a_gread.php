<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Reads a grade</h1>
    <form action="" method="post">
        <input type="text" name="letter" placeholder="Enter your number">
        <input type="submit" name="submit" value="Check">
    </form>

<?php
  
  if(isset($_POST['submit'])){

    $n = $_POST['letter'];
    echo gradeCheck($n);
  }
  
  function gradeCheck($n){
    if($n =="A"){
        return " <h1>Excellent</h1>";
     }
     else if($n == "B"){
      return " <h1>Good</h1>";
     }else if($n == "C"){
        return " <h1>Fair</h1>";
       }else if($n == "D"){
        return " <h1>Poor</h1>";
       }else if($n == "F"){
        return " <h1> Failure</h1>";
       }
}
    


?>
</body>
</html>
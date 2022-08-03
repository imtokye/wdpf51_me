<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Prime Number Check</h1>
    <form action="" method="post">
        <input type="text" name="number" placeholder="Enter your number">
        <input type="submit" name="submit" value="Check">
    </form>

<?php
  
  if(isset($_POST['submit'])){

    $n = $_POST['number'];
    echo primeCheck($n);
  }
  
  function primeCheck($n){
    if($n == 1){
        return "<h1>$n is not a prime number</h1>";
    }else if($n == 2){
        return "<h1>$n is a prime number</h1>";
    }else{
        for($i=2; $i<$n; $i++){
            if($n % $i == 0){
                return "<h1>$n is not a prime number</h1>";
            }
            
        }
         return "<h1> $n is a prime number</h1>";
    }
}
    


?>
</body>
</html>
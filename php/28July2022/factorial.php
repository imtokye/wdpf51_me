<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Factorial Check</h2>
    <form action="" method="post">
        <input type="text" name="number" placeholder="Enter your number">
        <input type="submit" name="submit" value="Check">
    </form>

<?php
  
  if(isset($_POST['submit'])){

    $n = $_POST['number'];
    echo "factorial of $n  is " . factorial($n);
  }
  
  function factorial($n){
    if($n==0){
        return 1;

    }
    return $n * factorial($n-1)  ;

}
    


?>
</body>
</html>

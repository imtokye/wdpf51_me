<?php 
 
    echo "<pre>";
     print_r($_FILES);


?>

<form action="" method="post" enctype="multipart/form-data">
    
    <input type="file" name="photo">
    <input type="submit" name="submit" value="Upload">
</form>
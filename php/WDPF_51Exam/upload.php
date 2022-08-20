<?php 

    if(isset($_POST['submit'])){

    $name=  $_FILES['file']['name'];
    $ext = explode(".", $name);
    $ext = strtolower(end($ext));

    $file= $_FILES['file']['type'];
    $tmp= $_FILES['file']['tmp_name'];
    $error= $_FILES['file']['error'];
    $size= $_FILES['file']['size'];

    $filetypes = array("jpg","png","pdf","txt","docx","xlsx");

    $errors = array();

    if($size>1024*400){
        $errors[] ="Size must be within 400kb";
    }

    if(!in_array($ext, $filetypes)){
        $errors[] ="File type must be JPG,PNG,PDF,TXT,DOCX,XLSX ";
    }

    if(count($errors)>0){
        foreach($errors as $err){
            echo $err . "<br>";
        }
}else{
   $result = move_uploaded_file($tmp, 'uploads/'.$name);
   if($result==1){
    echo "Uploaded successfully";

   }
}

   
}
    
    ?>

<form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" name="submit" value="UPLOAD">
    </form>
    


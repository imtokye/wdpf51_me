<?php 
$db= new mysqli('localhost', 'root','','wdpf51_exam');

?>
<?php 
//Delete
if(isset($_POST['submit'])){
    $id = $_POST['manu_id'];
    $sql = "DELETE FROM manufacturer WHERE id = '$id'";
    $db->query($sql);
    if($db->affected_rows>0){
        echo "Deleted";
    }
}
?>
 <?php 
//Entry
if(isset($_POST['manufacturer_submit'])){
    extract($_POST);
    //CALL add_manufacturer (@p0, @p1, @p2)
    $sql = "CALL add_manufacturer('$manu_nm', '$manu_add', '$manu_ph')";
    $db->query($sql);
    if($db->affected_rows>0){
        echo "Added";
    }
}
?>

<form action="" method="post">
    <select name="manu_id" id="">
        <option value="" disabled selected>Select one</option>
    <?php 
    $sql = "SELECT * FROM manufacturer";
    $result = $db->query($sql);
    while($row = $result->fetch_assoc()){?>
 
        <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?> </option>
        
   
    <?php
    }
    ?>
    </select>
    <input type="submit" name="submit" value="DELETE">
    </form>

   

<h1>Manufacturer Entry</h1>
 <form action="" method="post">
    <input type="text" name="manu_nm" placeholder="Enter Manufacturer "><br>
    <input type="text" name="manu_add" placeholder="Enter Address "><br>
    <input type="text" name="manu_ph" placeholder="Enter Phone Number "><br>
    <input type="submit" name="manufacturer_submit" value="ADD Manufacturer">
 </form>




 <br>
 <a href="products.php">Show Products</a>
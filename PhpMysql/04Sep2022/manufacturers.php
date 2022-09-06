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
        echo "<h2 style='color:red'>Deleted</h2>";
    }
}
?>
 <?php 
//Entry
if(isset($_POST['manufacturer_submit'])){
    extract($_POST);
    $sql = "CALL add_manufacturer('$manu_nm', '$manu_add', '$manu_ph')";
    $db->query($sql);
    if($db->affected_rows>0){
        echo "<h2 style='color:green'>Added</h2>";
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
 Manufacturer Name:<br><input type="text" name="manu_nm" placeholder="Enter Manufacturer "><br>
 Address:<br><input type="text" name="manu_add" placeholder="Enter Address "><br>
    Phone Number:<br><input type="text" name="manu_ph" placeholder="Enter Phone Number "><br>
    <br><input type="submit" name="manufacturer_submit" value="ADD Manufacturer"><br><br>
 </form>




 
 
 <br>
 <br>
 <button class="btn btn-success"><a href="products.php">Show Products</a></button>

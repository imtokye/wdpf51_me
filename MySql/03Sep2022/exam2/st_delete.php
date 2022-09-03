<?php 
$db= new mysqli('localhost', 'root','','wdpf51_exam2');

?>
<?php 
//Delete
if(isset($_POST['submit'])){
    $id = $_POST['manu_id'];
    $sql = "DELETE FROM students WHERE stid = '$id'";
    $db->query($sql);
    if($db->affected_rows>0){
        echo "Deleted";
    }
}
?>
 <?php 
//Entry
if(isset($_POST['st_submit'])){
    extract($_POST);
    //CALL add_manufacturer (@p0, @p1, @p2)
    $sql = "CALL add_students('$stname', '$staddress', '$stmobile')";
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
    $sql = "SELECT * FROM students";
    $result = $db->query($sql);
    while($row = $result->fetch_assoc()){?>
 
        <option value="<?php echo $row['stid'] ?>"><?php echo $row['stname'] ?> </option>
        
   
    <?php
    }
    ?>
    </select>
    <input type="submit" name="submit" value="DELETE">
    </form>

   

<h1>Students Entry</h1>
 <form action="" method="post">
   
    <input type="text" name="stname" placeholder="Enter name "><br>
    <input type="text" name="staddress" placeholder="Enter Address "><br>
    <input type="text" name="stmobile" placeholder="Enter Phone Number "><br>
    <input type="submit" name="st_submit" value="ADD Students">
 </form>




 <br>
 <a href="student_result_list.php">Student results page</a>

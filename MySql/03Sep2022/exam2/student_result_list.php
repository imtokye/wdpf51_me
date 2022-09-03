
<?php 
$db= new mysqli('localhost', 'root','','wdpf51_exam2');

?>
<table border=1>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Phone Number</th>
    <th>Subject</th>
    <th>Marks</th>
    </tr>
    <?php 
    $sql = "SELECT * FROM students_results_view";
    $result = $db->query($sql);
    while($row=$result->fetch_assoc()){?>
    <tr>
                <td><?php echo $row['stid']; ?> </td>
                <td><?php echo $row['stname'];?> </td>
                <td><?php echo $row['stmobile'];?> </td>
                <td><?php echo $row['rmodule_name'];?> </td>
                <td><?php echo $row['rtotal_marks'];?> </td>
    </tr>
    <?php
    }
    ?>
</table>

<br>
<a href="st_delete.php">Delete page</a>
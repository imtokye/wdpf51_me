<?php include_once("dbconfig.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <h1>Student List</h1>
    <div class="container">
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Action</th>

            </tr>
            <?php 
$sql = "SELECT * FROM students";
$result = $db->query($sql);
echo "<h2> Total record found $result->num_rows</h2>";

while($data = $result->fetch_assoc()){
    ?>
            <tr>
                <td><?php echo $data['student_id']; ?></td>
                <td><?php echo $data['student_name'];?></td>
                <td><?php echo $data['student_email'];?></td>
                <td><?php echo $data['student_phone'];?></td>
                <td>
                    <a href="student_delete.php?id=<?php echo $data['student_id'] ?> "onclick=" return confirm('Are you sure')"><img src="bin.png" width="30" alt=""></a>

                    <a href="student_delete.php?id=<?php echo $data['student_id'] ?>"><img src="edit.png" width="30" alt=""></a>
                </td>

            </tr>
 <?php }?>
        </table>

    </div>
    <a href="student_entry.php">New Entry</a>
</body>
</html>
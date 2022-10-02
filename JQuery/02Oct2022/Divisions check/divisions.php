<?php
$db = new mysqli("localhost", "root", "", "wdpf51_blank");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#divid").change(function(){
                var id = $(this).val();

                $.get('districts.php', {divid:id}, function(data){
                    $("#distid").html(data);

                })
            })
           
        });
    </script>

</head>
<body>
    <h2>Division District List</h2>
    <form action="">
        <select id="divid">
            <option value="" disabled selected>Select One</option>
            <?php
            $sql = "SELECT * FROM divisions";
            $result =$db->query($sql);
            while($row= $result->fetch_assoc()){
            ?>
            <option value="<?php echo $row['divid']; ?>">
            <?php echo $row['divname']; ?></option>
            <?php
             }
            ?>
        </select>
        <select id="distid">
            <option value="" disabled selected>Select One</option>
        </select>
    </form>
    <div id="show"></div>
    
</body>
</html>
<?php
$db = new mysqli("localhost", "root", "", "wdpf51_blank");

$id = $_GET['divid'];

$sql = "SELECT * FROM districts WHERE dist_divid='$id'";

$result = $db->query($sql);
echo '<option value="" disabled selected>Select One</option>';
while($row = $result->fetch_assoc()){
    echo '<option value="'. $row['disid'].'">' . $row['disname'] ."</option>";
}

?>
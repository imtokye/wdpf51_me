<h1>$_SERVER super global</h1>
<?php 
echo "<pre>";
print_r($_SERVER);

echo $_SERVER['PHP_SELF'];
?>

<h1>$_GET super global</h1>

<a href="super_globals.php?name=aminul&phone=01926604242&age=28">Click here</a>

<?php
echo $_GET['name'];
echo "<br>";
echo $_GET['age'];
echo "<br>";
echo $_GET['phone'];
echo "<br>";
print_r($_GET); 

?>
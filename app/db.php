//EN ESTE ARCHIVO SE CONFIGURA LA CONEXIÓN A LA BD QUE USAMOS
<?php
$hostname = "db";
$username = "admin";
$password = "test";
$db = "database";

$conn = mysqli_connect($hostname, $username, $password, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
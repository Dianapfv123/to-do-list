<?php
$servername = "localhost";
$username = "id22199860_diana";
$password = "Hector@123.";
$dbname = "todo_list";
// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);
// Verificar conexión
if ($conn->connect_error) {
die("Conexión fallida: " . $conn->connect_error);
}
?>

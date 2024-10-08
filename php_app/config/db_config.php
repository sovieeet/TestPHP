<?php
$host = getenv('DOCKER') ? 'db' : 'localhost';
$user = 'root';
$password = 'rootpassword';
$database = 'usuarios_db';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>

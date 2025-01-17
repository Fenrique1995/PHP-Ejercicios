<?php
$host = $_ENV['DB_HOST'];; // Cambia si tu MariaDB no está en localhost
$dbname = $_ENV['DB_NAME'];
$username = $_ENV['DB_USERNAME']; // Tu usuario de MariaDB
$password = $_ENV['DB_PASSWORD']; // Tu contraseña de MariaDB

$conn = new mysqli($host, $username, $password, $dbname);

// Verifica si la conexión es exitosa
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
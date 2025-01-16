<?php
//41-Conectar PHP con una base de datos MySQL.
$servidor = $_ENV['DB_HOST'];
$usuario = $_ENV['DB_USER'];
$contrasena = $_ENV['DB_PASS'];// Cambiar según sea necesario
$baseDeDatos = $_ENV['DB_NAME'];

// Crear conexión
$conexion = new mysqli($servidor, $usuario, $contrasena, $baseDeDatos);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error al conectar con la base de datos: " . $conexion->connect_error);
}

echo "Conexión exitosa a la base de datos '$baseDeDatos'.";

// Cerrar conexión
$conexion->close();

// O con PDO 

$servidor = $_ENV['DB_HOST'];
$usuario = $_ENV['DB_USER'];
$contrasena = $_ENV['DB_PASS'];// Cambiar según sea necesario
$baseDeDatos = $_ENV['DB_NAME'];

try {
    // Crear conexión PDO
    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDeDatos;charset=utf8", $usuario, $contrasena);

    // Configurar el modo de error de PDO
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexión exitosa a la base de datos '$baseDeDatos'.";
} catch (PDOException $e) {
    echo "Error al conectar con la base de datos: " . $e->getMessage();
}

// No es necesario cerrar explícitamente la conexión, PHP lo hace automáticamente al finalizar el script.
?>
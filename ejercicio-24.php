<?php
//24-Leer datos de un formulario HTML con $_POST.

// Comprobar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Leer los datos enviados
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $edad = $_POST['edad'];

    // Mostrar los datos recibidos
    echo "<h2>Datos recibidos:</h2>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Correo electrónico: $email</p>";
    echo "<p>Edad: $edad</p>";
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Subir archivo</title>
</head>
<body>
    <h2>Subir un archivo</h2>
    <form action="subir_archivo.php" method="POST" enctype="multipart/form-data">
        <label for="archivo">Selecciona un archivo:</label>
        <input type="file" id="archivo" name="archivo" required><br><br>
        <input type="submit" value="Subir archivo">
    </form>
</body>
</html>
<?php
//26-Subir un archivo a un servidor.

// Verificar si se ha enviado un archivo
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['archivo'])) {
    // Directorio donde se guardará el archivo subido
    $directorioDestino = "uploads/";

    // Crear el directorio si no existe
    if (!is_dir($directorioDestino)) {
        mkdir($directorioDestino, 0777, true);
    }

    // Obtener información del archivo subido
    $nombreArchivo = basename($_FILES['archivo']['name']);
    $rutaDestino = $directorioDestino . $nombreArchivo;

    // Verificar si hubo errores en la subida
    if ($_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
        // Mover el archivo subido al directorio de destino
        if (move_uploaded_file($_FILES['archivo']['tmp_name'], $rutaDestino)) {
            echo "El archivo se ha subido correctamente a: $rutaDestino";
        } else {
            echo "Error al mover el archivo al directorio de destino.";
        }
    } else {
        echo "Error en la subida del archivo. Código de error: " . $_FILES['archivo']['error'];
    }
} else {
    echo "No se ha enviado ningún archivo.";
}
?>
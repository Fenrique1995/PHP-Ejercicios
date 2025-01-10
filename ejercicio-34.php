<?php
//34-Leer el contenido de un archivo de texto.

// Ruta del archivo
$archivo = "archivo.txt";

// Leer el contenido del archivo de manera más sencilla
$contenido = file_get_contents($archivo);

if ($contenido !== false) {
    // Mostrar el contenido
    echo "Contenido del archivo:\n";
    echo $contenido;
} else {
    echo "No se pudo leer el archivo.";
}
?>
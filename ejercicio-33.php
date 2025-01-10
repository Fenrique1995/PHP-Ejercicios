<?php
//33-Crear un archivo de texto y escribir en él.

// Ruta y nombre del archivo
$archivo = "archivo.txt";

// Contenido a escribir en el archivo
$contenido = "Hola, este es un ejemplo de escritura en un archivo de texto.\n";

// Crear o abrir el archivo en modo escritura
$archivoHandle = fopen($archivo, "w");

if ($archivoHandle) {
    // Escribir contenido en el archivo
    fwrite($archivoHandle, $contenido);
    echo "El archivo '$archivo' se ha creado y el contenido se ha escrito correctamente.";
    
    // Cerrar el archivo
    fclose($archivoHandle);
} else {
    echo "No se pudo abrir el archivo para escritura.";
}
?>
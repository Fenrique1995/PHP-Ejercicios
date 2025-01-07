<?php
//18-Contar el número de palabras en una cadena.

function contadorPalabras ($text) {
    $contador = str_word_count($text);
    echo "{$text} tiene {$contador} palabras \n";
}

contadorPalabras("HOLA");
contadorPalabras("ENCONTRE UN ASTROLOPITECUS");

function contarPalabras_explode($cadena) {
    $palabras = explode(" ", trim($cadena)); // Dividir la cadena por espacios
    $palabras = array_filter($palabras);    // Filtrar elementos vacíos
    return count($palabras);
}

echo "Alejandro tiene tres manzanas tiene ".contarPalabras_explode("Alejandro tiene tres manzanas")." palabras";
?>
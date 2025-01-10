<?php
//28-Generar números aleatorios y almacenarlos en un arreglo.
// Función para generar un arreglo con números aleatorios
function generarNumerosAleatorios($cantidad, $min, $max) {
    $arreglo = [];

    // Generar números aleatorios y almacenarlos en el arreglo
    for ($i = 0; $i < $cantidad; $i++) {
        $arreglo[] = rand($min, $max);
    }

    return $arreglo;
}

// Ejemplo de uso
$cantidad = 10; // Cantidad de números aleatorios
$min = 1;       // Límite inferior
$max = 100;     // Límite superior

$numerosAleatorios = generarNumerosAleatorios($cantidad, $min, $max);

// Mostrar los números generados
echo "Números aleatorios generados:\n";
print_r($numerosAleatorios);
?>
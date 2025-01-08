<?php
//23-Crear una matriz bidimensional y recorrerla con bucles anidados.

// Crear una matriz bidimensional
$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

// Recorrer la matriz con bucles anidados
foreach ($matriz as $filaIndex => $fila) {
    echo "Fila $filaIndex:\n";
    foreach ($fila as $columnaIndex => $valor) {
        echo "  Columna $columnaIndex: $valor\n";
    }
    echo "\n"; // Separador entre filas
}
?>
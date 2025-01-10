<?php
//35-Crear una función que encuentre el número más grande de un arreglo.

function encontrarMaximo(array $array): int {
    // Inicializar el valor máximo con el primer elemento del arreglo
    $maximo = $array[0];

    // Recorrer el arreglo y comparar cada elemento
    foreach ($array as $valor) {
        if ($valor > $maximo) {
            $maximo = $valor;
        }
    }

    return $maximo;
}

// Ejemplo de uso
$miArray = [10, 25, 3, 50, 12, 7];
$maximo = encontrarMaximo($miArray);

echo "El número más grande en el arreglo es: $maximo";

?>
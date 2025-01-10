<?php
//27-Crear una función que sume todos los elementos de un arreglo.

// Función para sumar todos los elementos de un arreglo
function sumarElementos($arreglo) {
    $suma = 0;

    // Recorrer el arreglo y sumar sus elementos
    foreach ($arreglo as $elemento) {
        $suma += $elemento;
    }

    return $suma;
}

// Ejemplo de uso
$miArreglo = [1, 2, 3, 4, 5];
$resultado = sumarElementos($miArreglo);
echo "La suma de los elementos es: $resultado \n";
?>
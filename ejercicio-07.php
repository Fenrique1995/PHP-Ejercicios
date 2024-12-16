<?php
//07-Ordenar un arreglo en orden ascendente.
$array = [9, 66, 44, 76, 16];

// Obtener el tamaño del arreglo
$contador = count($array);

// Algoritmo Bubble Sort para ordenar en orden ascendente
for ($i=0; $i < $contador; $i++) { 
    for ($j=0; $j < $contador - $i - 1; $j++) { 
        if ($array[$j] > $array[$j + 1]) {
            // Intercambiar elementos si están fuera de orden
            $temp = $array[$j];
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $temp;
        }
    }
}

print_r($array);

//otra forma 
$array2 = [99, 666, 444, 776, 116];

//usando el sort
sort($array2);

print_r($array2);
?>
<?php
//32-Implementar una función que ordene un arreglo usando un algoritmo personalizado.

function bubbleSort(array $array): array {
    $n = count($array);
    
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                // Intercambiar los elementos
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }

    return $array;
}

// Ejemplo de uso
$miArray = [64, 34, 25, 12, 22, 11, 90];
echo "Array original: " . implode(", ", $miArray) . "\n";

$miArrayOrdenado = bubbleSort($miArray);
echo "Array ordenado: " . implode(", ", $miArrayOrdenado) . "\n";

?>
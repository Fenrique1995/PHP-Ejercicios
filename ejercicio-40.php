<?php
//40-Crear una función que elimine elementos duplicados de un arreglo.

function eliminarDuplicados($arreglo) {
    // Usar array_unique para eliminar duplicados
    $arregloSinDuplicados = array_unique($arreglo);

    // Reindexar el arreglo para que los índices sean consecutivos
    return array_values($arregloSinDuplicados);
}

// Ejemplo de uso
$arregloConDuplicados = [1, 2, 2, 3, 4, 4, 5, 5, 5, 6];
$arregloSinDuplicados = eliminarDuplicados($arregloConDuplicados);

echo "Arreglo original: ";
print_r($arregloConDuplicados);

echo "\nArreglo sin duplicados: ";
print_r($arregloSinDuplicados);

?>
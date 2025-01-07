<?php
//17-Imprimir los primeros 10 números de la serie de Fibonacci.
function fibonacci($n) {
    $serie = [];
    $a = 0; // Primer número
    $b = 1; // Segundo número

    for ($i = 0; $i < $n; $i++) {
        $serie[] = $a; // Agregar el número actual a la serie
        $siguiente = $a + $b; // Calcular el siguiente número
        $a = $b; // Actualizar el valor de 'a'
        $b = $siguiente; // Actualizar el valor de 'b'
    }

    return $serie;
}

// Ejemplo de uso
$numerosFibonacci = fibonacci(10);
echo "Los primeros 10 números de la serie de Fibonacci son:\n";
echo implode(", ", $numerosFibonacci);
?>
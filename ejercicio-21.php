<?php
//21-Crear una función para calcular el factorial de un número.

function calcularFactorial($numero) {
    if ($numero < 0) {
        echo "El factorial no está definido para números negativos. \n";
    }
    else {
    $factorial = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $factorial *= $i;
    }
    echo "El factorial de $numero es $factorial \n";
    }
}

calcularFactorial(5);
calcularFactorial(-4);
?>
<?php
//12-Convertir grados Celsius a Fahrenheit.

function ConversorFahrenheit ($num1) {
    return ($num1 * 9/2) +32;
}

$numero = 23;
$resultado = ConversorFahrenheit($numero);

echo "{$resultado}\n";

echo "".ConversorFahrenheit(18);
?>
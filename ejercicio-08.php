<?php
//08-Crear una función que devuelva el doble de un número.

function FunctionDouble($num1) {
    return $num1 * 2;
}

$numero = 10;

$resultado = FunctionDouble($numero);

echo "{$resultado}";
?>
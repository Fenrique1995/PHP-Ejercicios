<?php
//29-Crear un programa que simule una calculadora básica.

function calculadora($num1, $operation, $num2) {
    switch ($operation) {
        case '+':
            return (fn($a, $b) => $a + $b)($num1, $num2);
        case '-':
            return (fn($a, $b) => $a - $b)($num1, $num2);
        case '*':
            return (fn($a, $b) => $a * $b)($num1, $num2);
        case '/':
            // Validar división por cero
            if ($num2 == 0) {
                return "Error: División por cero";
            }
            return (fn($a, $b) => $a / $b)($num1, $num2);
        default:
            return "Operación no válida";
    }
}

// Ejemplo de uso
echo calculadora(2, "+", 2) . "\n"; // Salida: 4
echo calculadora(10, "-", 5) . "\n"; // Salida: 5
echo calculadora(3, "*", 3) . "\n"; // Salida: 9
echo calculadora(10, "/", 0) . "\n"; // Salida: Error: División por cero

?>
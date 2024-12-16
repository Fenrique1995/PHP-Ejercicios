<?php
//05-Calcular el área de un círculo dado su radio.
$pi= 3.14;
$radio = 7;

$area = $pi * pow($radio, 2);

echo "El area es de {$area} con un radio de {$radio} \n";

//Otra forma 

$radio02 = 5;

$area02 = pi() * pow($radio02, 2);

echo "El area es de {$area02} con un radio de {$radio02}"
?>
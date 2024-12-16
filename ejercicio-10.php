<?php
//10-Usar un bucle while para imprimir números pares entre 1 y 20.
$a = 1;

while ($a <= 20) {
    if ($a % 2 == 0) {
        echo "{$a} \n";
    }
    $a++;
}
?>
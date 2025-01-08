<?php
//22-Determinar si un número es primo.

function esPrimo($numero) {
    if ($numero <= 1) {
        echo "$numero no es primo (porque es menor o igual a 1)\n";
        return;
    }

    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            echo "$numero no es primo (es divisible por $i)\n";
            return;
        }
    }

    echo "$numero es primo\n";
}

esPrimo(2);
esPrimo(1);
esPrimo(9);
?>
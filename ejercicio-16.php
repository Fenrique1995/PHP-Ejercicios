<?php
//16-Calcular la tabla de multiplicar de un número.

function tablaMultiplicar ($numero) {
    for ($i=0; $i <= 10; $i++) { 
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado\n";
    }
}

tablaMultiplicar(2);
tablaMultiplicar(5);
?>
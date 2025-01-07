<?php
//15-Crear una función que determine si un año es bisiesto.

function esBisiesto ($anio) {
    if  (($anio % 4 == 0 && $anio % 100 != 0) || ($anio % 400 == 0)) {
        echo "Es Bisiesto\n";
    }
    else {
        echo "No es Bisiesto\n";
    }
}

esBisiesto(2011);
esBisiesto(890);
esBisiesto(2024);
esBisiesto(1453);
esBisiesto(1970);
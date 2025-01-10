<?php
//30-Crear una función que determine la cantidad de vocales en una cadena.

function contadorDeLetras ($cadena) {
    if (is_string($cadena)){
        $arrayLetras = str_split($cadena);
        $contador = 0;

        foreach ($arrayLetras as $letra) {
            $contador++;
        }
        echo "{$cadena} tiene {$contador} letras \n";
    } else {
        echo "Debe ser una palabra o letra \n";
    }
}
contadorDeLetras ("Hola");
contadorDeLetras (4);
contadorDeLetras ("A");
?>
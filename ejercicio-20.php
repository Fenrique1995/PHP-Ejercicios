<?php
//20-Verificar si una palabra es un palíndromo.

function revertirCadena_strrev($cadena) {
    $cadenaRevertida = strrev($cadena);
    return $cadenaRevertida;
}

function verificarPalindromo ($cadena) {
    $text2 = revertirCadena_strrev($cadena);

    if ($cadena == $text2) {
        echo "{$cadena} Es palindromo \n";
    } else {
        echo "{$cadena} No Es palindromo \n";
    }
}

verificarPalindromo("ALA");
verificarPalindromo("HOLA");

?>
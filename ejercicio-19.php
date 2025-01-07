<?php
//19-Revertir una cadena de texto.
function revertirCadena_strrev($cadena) {
    $cadenaRevertida = strrev($cadena);
    echo "{$cadenaRevertida} \n";
}

revertirCadena_strrev("Hola");

//otra forma 

function revertirCadena_array_reverse($cadena) {
    $caracteres = str_split($cadena); // Convertir la cadena en un array de caracteres
    $caracteresRevertidos = array_reverse($caracteres); // Revertir el array
    $cadenaInvertida = implode("", $caracteresRevertidos); // Unir los caracteres en una cadena
    echo "{$cadenaInvertida} \n";
}

revertirCadena_array_reverse("ASTROLOPITECUS");
?>
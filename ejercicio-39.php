<?php
//39-Implementar un script que detecte si una cadena contiene otra cadena.

function contieneCadena($cadenaPrincipal, $cadenaBuscar) {
    // Usar strpos para buscar la cadena
    if (strpos($cadenaPrincipal, $cadenaBuscar) !== false) {
        return true;
    }
    return false;
}

// Ejemplo de uso
$cadenaPrincipal = "El lenguaje PHP es muy popular para el desarrollo web.";
$cadenaBuscar = "PHP";

if (contieneCadena($cadenaPrincipal, $cadenaBuscar)) {
    echo "La cadena \"$cadenaBuscar\" se encuentra en la cadena principal.";
} else {
    echo "La cadena \"$cadenaBuscar\" no se encuentra en la cadena principal.";
}

?>
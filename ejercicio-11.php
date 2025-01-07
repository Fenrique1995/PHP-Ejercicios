<?php
//11-Crear una constante y mostrar su valor.
const CONSTANTE = "Hola mundo";

define('SEGUNDACONSTANTE', '¿Como te va?');


echo "".CONSTANTE."\n";
echo "".SEGUNDACONSTANTE."\n";

//acceder a una constante de una clase

class Saludo {
    const SALUDO = "Hola, ¿Como estas?";
}

echo "".Saludo::SALUDO;
?>
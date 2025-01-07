<?php
//14-Concatenar dos cadenas de texto.

function Concatenador ($text1, $text2){
    return $text1 ." ". $text2."\n";
} 

echo "".Concatenador("Hola", "Mundo");
echo "".Concatenador("Mundo", "Hola");
?>
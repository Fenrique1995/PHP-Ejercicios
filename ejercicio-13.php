<?php
//13-Verificar si un número es positivo, negativo o cero.
function Verificador ($num) {
    if ($num == 0) {
        echo "El numero es cero\n";
    }
    else if ($num > 0) {
        echo "El numero es positivo\n";
    }
    else {
        echo "El numero es negativo\n";
    }
}

echo "".Verificador(-21);

echo "".Verificador(12);

echo "".Verificador(0);
?>
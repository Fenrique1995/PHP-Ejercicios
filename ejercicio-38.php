<?php
//38-Crear un programa que convierta números a texto.

function convertirNumeroATexto($numero) {
    // Listas de palabras para las unidades, decenas y centenas
    $unidades = ['', 'uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve'];
    $decenas = ['', 'diez', 'veinte', 'treinta', 'cuarenta', 'cincuenta', 'sesenta', 'setenta', 'ochenta', 'noventa'];
    $especiales = [
        11 => 'once', 12 => 'doce', 13 => 'trece', 14 => 'catorce', 
        15 => 'quince', 16 => 'dieciséis', 17 => 'diecisiete', 
        18 => 'dieciocho', 19 => 'diecinueve'
    ];
    $centenas = [
        '', 'cien', 'doscientos', 'trescientos', 'cuatrocientos', 
        'quinientos', 'seiscientos', 'setecientos', 'ochocientos', 'novecientos'
    ];

    if ($numero == 0) {
        return 'cero';
    }

    if ($numero < 10) {
        return $unidades[$numero];
    }

    if ($numero < 20) {
        return $especiales[$numero];
    }

    if ($numero < 100) {
        $decena = intdiv($numero, 10);
        $unidad = $numero % 10;
        return $unidad == 0 ? $decenas[$decena] : $decenas[$decena] . ' y ' . $unidades[$unidad];
    }

    if ($numero < 1000) {
        $centena = intdiv($numero, 100);
        $resto = $numero % 100;

        if ($resto == 0) {
            return $centena == 1 ? 'cien' : $centenas[$centena];
        }

        return $centenas[$centena] . ' ' . convertirNumeroATexto($resto);
    }

    if ($numero < 10000) {
        $mil = intdiv($numero, 1000);
        $resto = $numero % 1000;

        $milTexto = $mil == 1 ? 'mil' : $unidades[$mil] . ' mil';

        return $resto == 0 ? $milTexto : $milTexto . ' ' . convertirNumeroATexto($resto);
    }

    return 'Número fuera de rango';
}

// Ejemplo de uso
$numero = 1234;
echo "El número $numero se convierte en: " . convertirNumeroATexto($numero);

?>
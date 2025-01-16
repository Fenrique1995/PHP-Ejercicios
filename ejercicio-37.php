<?php
//37-Usar date() para mostrar la fecha y hora actual.

// Configurar la zona horaria
date_default_timezone_set('America/Argentina/Buenos_Aires');

// Obtener y mostrar la fecha y hora actual
$fechaActual = date('Y-m-d');
$horaActual = date('H:i:s');

echo "Fecha actual: $fechaActual\n";
echo "Hora actual: $horaActual\n";

// Formato completo: Lunes, 13 de Enero de 2025 - 15:45:30
$fechaHoraCompleta = date('l, d \d\e F \d\e Y - H:i:s');
echo "Fecha y hora actual: $fechaHoraCompleta\n";
?>
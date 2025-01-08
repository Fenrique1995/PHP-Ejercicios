<?php
//25-Validar un correo electrónico usando filtros de PHP.

// Correo electrónico a validar
$email = "juan@example.com";

// Validar el correo electrónico usando FILTER_VALIDATE_EMAIL
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "El correo electrónico '$email' es válido.";
} else {
    echo "El correo electrónico '$email' no es válido.";
}

?>
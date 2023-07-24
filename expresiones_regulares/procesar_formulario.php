<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $telefono = $_POST["telefono"];

    // Expresión regular para validar el número de teléfono
    $patron = "/^[0-9]{3}-[0-9]{7}$/";

    if (preg_match($patron, $telefono)) {
        echo "Número de teléfono válido: " . $telefono;
    } else {
        echo "Número de teléfono no válido. Debe ser de 10 dígitos en formato 'XXX-XXXXXXX'.";
    }
}
?>

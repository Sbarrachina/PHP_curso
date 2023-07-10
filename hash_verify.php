<?php 


$contrasena = 'miPasswordSegura123';

// Encriptar la contraseña utilizando la función hash()
$hashed = hash('sha256', $contrasena);

echo 'Contraseña encriptada (hash): ' . $hashed . '<br>';

// Encriptar la contraseña utilizando PASSWORD_BCRYPT
$hashed_bcrypt = password_hash($contrasena, PASSWORD_BCRYPT);

echo 'Contraseña encriptada (bcrypt): ' . $hashed_bcrypt . '<br>';

// Verificar una contraseña encriptada utilizando password_verify()
$otraContrasena = 'miPasswordSegura123';
if (password_verify($otraContrasena, $hashed_bcrypt)) {
    echo 'La contraseña es válida.';
} else {
    echo 'La contraseña no es válida.';
}




?>
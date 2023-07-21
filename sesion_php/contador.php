<?php
session_start();

if (!isset($_SESSION['nombre'])) {
    header('Location: index.php');
    exit();
}

if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 1;
} else {
    $_SESSION['contador']++;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones PHP</title>
</head>
<body>
    <?php echo "Hola " . $_SESSION['nombre'] . ". Has visitado esta página " . $_SESSION['contador'] . " veces."; ?>
    <br><br>
    <a href="cerrar.php">Cerrar sesión</a>
</body>
</html>

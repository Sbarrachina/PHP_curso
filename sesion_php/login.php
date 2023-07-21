<?php
session_start();

if ($_POST['usuario'] == "Maria" && $_POST['clave'] == "1234") {
    $_SESSION["nombre"] = "Maria";
    header('Location: contador.php');
    exit();
} else {
    header('Location: index.php');
    exit();
}
?>

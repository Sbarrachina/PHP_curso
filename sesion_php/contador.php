
<?php 

session_name("CON");
session_start();

$_SESSION['contador']=1;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones PHP</title>
</head>
<body>
    <?php echo "has recargado esta pagina ".$_SESSION['contador'].
    "veces"; ?>
    <br><br>
    <a href="index.php">Inicio</a>
    <br>
    <a href="cerrar.php">Eliminar sesion</a>
    
</body>
</html>



<?php 

// setcookie(nombre, valor, expiracion, ruta, dominio, seguridad,
//  httponly);

setcookie("Idioma","es", time()+60*60*24*30); // que dure 30 dias 

setcookie("Idioma","es", time()+60*60*24*365); // que dure 1 Año 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
<h1> Hola Mundo </h1>
<h1> <?php  echo $_COOKIE['Idioma']?> </h1> 
<!-- Para mostrar el valor de la Cookie  -->
    


</body>
</html>
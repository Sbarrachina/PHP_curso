<?php 

$nombre=$_POST['nombre'];
$asignatura=$_POST['asignatura'];
$frutas=$_POST['frutas'];

echo $nombre." - ".$asignatura. " - ".$frutas;

// imprime  sandra - Lenguaje - Manzana 
// datos que intruducimos en nuestro formulario que postearemos (POST) a través de index.php

?>

<br>

<?php 

$nombre=$_GET['nombre'];
$asignatura=$_GET['asignatura'];
$frutas=$_GET['frutas'];

echo $nombre." - ".$asignatura. " - ".$frutas;

// los datos se ven a través de la url 

// http://localhost:8888/curso_php/index.php?nombre=php&asignatura=Matematicas&frutas=Manzana

?>

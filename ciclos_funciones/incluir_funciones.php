<!-- Ejemplo  -->
<!-- incluir y llamar una función desde otro archivo php -->

<?php 
include "./funciones.php"; // incluimos el código creado en funciones.php
echo "El promedio es: ".promedios_alumnos(7,3,9);

// También se puede usar require en lugar de include y obtenemos el mismo resultado

?>

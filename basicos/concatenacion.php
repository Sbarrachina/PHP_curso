<!-- La concatenacion de variables o de strings  -->
<!-- Unir variables mediante el punto -->
<?php 

$nombre= "Delta";
$pais="Australia";

$resultado=$nombre.$pais;

echo $nombre.$pais;

?>

<br>
<?php 

$nombre= "Celine";
$pais="Canada";
$numero=7;

$resultado=$nombre.$pais.$numero;

echo $resultado;

?>

<br>
<?php 

$nombre= "Celine";
$pais="Canada";
$numero=7;

$resultado=$nombre.$pais.$numero;

echo "Mi cantante favorita es:" .$nombre."la nacionalidad de celine es".$pais;

?>

<!-- la interpolación de la variable -->

<br>

<?php 

$nombre= "Carlos";
$pais= "El Salvador";


echo "Mi nombre es: $nombre mi pais de residencia es $pais";

?>
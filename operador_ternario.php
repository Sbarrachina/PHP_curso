
<!-- No se imprime en pantalla -->
<?php 

(9>7) ? 10*7 : 10*5;


?>

<!-- Se imprime en pantalla al crear una variable $total -->
<?php 

(9>7) ? $total=10*7 : $total10*5;

echo $total; //imprime 70

?>
<br>

<?php 

$total=(2>7) ? 10*7 : 10*5;

echo $total; // imprime 50

?>
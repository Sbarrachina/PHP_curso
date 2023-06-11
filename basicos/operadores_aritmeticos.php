
<!-- Suma -->
<!-- Usando valores numéricos -->
<?php 

$numero_1=2;
$numero_2=5;

echo $numero_1 + $numero_2; // Imprime 7

echo $numero_1 +10;// Imprime 12

?>

<br>

<!-- usando una variable resultado -->
<?php 

$numero_1=10;
$numero_2=15;

$resultado=$numero_1+100; // imprime 110

echo $resultado;
?>

<br>
<!-- Resta -->
<!-- Usando valores numéricos -->
<?php 

$numero_1=2;
$numero_2=5;

echo $numero_1 - $numero_2; // Imprime -3

echo $numero_1 -10;// Imprime -8

?>

<br>

<!-- usando una variable resultado -->
<?php 

$numero_1=10;
$numero_2=15;

$resultado=$numero_1-100;

echo $resultado; // imprime -90
?>

<!-- se hace lo mismo con mutiplación (*) y división (/) -->

<br>

<!-- por exponenciación  Ejemplo:estas multiplicando (**) en $numero_2 por si mismo dos veces --> 

<?php 
$numero_1=2;
$numero_2=5;

$resultado=$numero_2**$numero_1;

echo  $resultado;

?>

<!-- Resto o Modulo % solo para divisiones enteras -->

<br>

<?php 
$numero_1=10;
$numero_2=3;

$resultado=$numero_1%$numero_2;

echo  $resultado; // imprime 1 ( el resto de la división)

?>

<?php 
$numero_1=12;
$numero_2=3;

$resultado=$numero_1%$numero_2;

echo  $resultado; // imprime 0 ( El resto de la división)

?>

<br>

<!-- La jerarquias y el orden que se resulve las expresiones -->

<?php 

$numero_1=5;
$numero_2=2;

$resultado=7-4+($numero_1*$numero_2)/$numero_2;

echo  $resultado; // imprime 8

// como hemos llegado a ese resultado:
//primero ejecuta lo que hay dentro del parentesis 5x2=10
//segundo haria la división (/) 10/2= 5
// lo que nos queda ( suma y resto lo hacemos de izquierda a derecha)
// seria 7-4=3  y lo que nos queda 3+5 = 8 que es lo que imprime . 

?>
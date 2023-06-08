<!-- Igual (==): -->

<?php 
$a = 10;
$b = 5;
if ($a == $b) {
    echo "Los valores son iguales";
} else {
    echo "Los valores no son iguales";
}
// Salida: Los valores no son iguales


?>
<br>

<!-- No igual (!=): -->

<?php 
$a = 10;
$b = 5;
if ($a != $b) {
    echo "Los valores no son iguales";
} else {
    echo "Los valores son iguales";
}
// Salida: Los valores no son iguales

?>
<br>


<!-- Idéntico (===): -->

<?php 

$a = 10;
$b = "10";
if ($a === $b) {
    echo "Los valores son idénticos";
} else {
    echo "Los valores no son idénticos";
}
// Salida: Los valores no son idénticos

?>
<br>


<!-- No idéntico (!==): -->

<?php 

$a = 10;
$b = "10";
if ($a !== $b) {
    echo "Los valores no son idénticos";
} else {
    echo "Los valores son idénticos";
}
// Salida: Los valores no son idénticos

?>
<br>

<!-- Mayor que (>): -->


<?php 

$a = 10;
$b = 5;
if ($a > $b) {
    echo "El primer valor es mayor que el segundo";
} else {
    echo "El primer valor no es mayor que el segundo";
}
// Salida: El primer valor es mayor que el segundo

?>

<!-- Mayor o igual que (>=): -->
<br>

<?php 


$a = 10;
$b = 10;
if ($a >= $b) {
    echo "El primer valor es mayor o igual que el segundo";
} else {
    echo "El primer valor no es mayor o igual que el segundo";
}
// Salida: El primer valor es mayor o igual que el segundo

?>

<!-- Menor que (<): -->
<br>

<?php 

$a = 5;
$b = 10;
if ($a < $b) {
    echo "El primer valor es menor que el segundo";
} else {
    echo "El primer valor no es menor que el segundo";
}
// Salida: El primer valor es menor que el segundo

?>
<br>

<!-- Menor o igual que (<=): -->

<?php
$a = 10;
$b = 10;
if ($a <= $b) {
    echo "El primer valor es menor o igual que el segundo";
} else {
    echo "El primer valor no es menor o igual que el segundo";
}
// Salida: El primer valor es menor o igual que el segundo

?>
<br> <br>

<!-- USANDO LA FUNCIÓN VAR_DUMP()  MUESTRA EL VALOR Y EL TIPO DE UNA VARIABLE-->

<!-- Igual (==): -->
<?php 
$a = 10;
$b = 5;
var_dump($a == $b);
// Salida: bool(false)

?>

<br>

<!-- No igual (!=): -->

<?php 
$a = 10;
$b = 5;
var_dump($a != $b);
// Salida: bool(true)
?>
<br>

<!-- Idéntico (===): -->

<?php 
$a = 10;
$b = "10";
var_dump($a === $b);
// Salida: bool(false)

?>

<br>

<!-- No idéntico (!==): -->

<?php 

$a = 10;
$b = "10";
var_dump($a !== $b);
// Salida: bool(true)
?>
<br>


<!-- Mayor que (>): -->

<?php 
$a = 10;
$b = 5;
var_dump($a > $b);
// Salida: bool(true)

?>

<br>

<!-- Mayor o igual que (>=): -->

<?php 
$a = 10;
$b = 10;
var_dump($a >= $b);
// Salida: bool(true)
?>
<br>


<!-- Menor que (<): -->

<?php 

$a = 5;
$b = 10;
var_dump($a < $b);
// Salida: bool(true)

?>
<br>

<!-- Menor o igual que (<=): -->

<?php 
$a = 10;
$b = 10;
var_dump($a <= $b);
// Salida: bool(true)

?>
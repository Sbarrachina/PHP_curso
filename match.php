<!-- la característica de Match se introdujo a partir de PHP 8.0, 
por lo que si estás utilizando una versión anterior, es posible
 que no sea compatible y se produzca un error. -->

<?php 

$a=7;

$x=10;
$y=9;
$z=7;

$resultado= match($a){
    $x => "Valor igual a x", // si es igual o idéntica
    $y => "Valor igual a y",
    $z => "Valor igual a z",
    default => " No coincide con ninguna variable"


}; // no olvides poner (;) sino no funciona

echo $resultado;



?>
<br>

<?php 
$fruta = "Manzana";

$mensaje = match ($fruta) {
    "Manzana" => "Es una manzana",
    "Naranja", "Mandarina" => "Es una naranja o mandarina",
    "Plátano" => "Es un plátano",
    default => "No se reconoce la fruta"
};

echo $mensaje;



?>

<br>

<?php 

$edad=35;

$resultado = match(true){
    $edad >= 60 => "Eres de la tercera edad",
    $edad >= 30 => "Eres adulto ",
    $edad >= 18 => "Eres adulto joven",
    default => "Eres un niño"

};

echo $resultado;



?>
<?php 

$cadena_texto="Hola Mundo FANTASIA";
echo strtolower($cadena_texto);

// convierte todas las letras de un string en minusculas


?>

<br>
<!-- usando variables  -->

<?php 

$cadena_texto="Hola Mundo IDEAL";

$cadena_texto=strtolower($cadena_texto);

echo $cadena_texto;

// convierte todas las letras de un string en minusculas


?>
<br>

<?php 

$cadena_texto="Hola Mundo FANTASIA";
echo strtoupper($cadena_texto);

// convierte todas las letras de un string en Mayusculas 


?>

<br>
<!-- usando variables  -->

<?php 

$cadena_texto="Hola Mundo IDEAL";

$cadena_texto= strtoupper($cadena_texto);

echo $cadena_texto;

// convierte todas las letras de un string en mayusculas


?>

<br>

<?php 

$cadena_texto="hola maravilloso dia";

$cadena_texto= ucfirst($cadena_texto);

echo $cadena_texto; 
// convierte la primera letra del string en Mayuscula 

?>

<br>

<?php 

$cadena_texto="hola maravilloso despertar";

$cadena_texto= ucwords($cadena_texto);

echo $cadena_texto; 
// convierte la primera letra de cada palabra en mayúscula

?>

<br>
<!-- FUNCION CONTAR CARACTERES Y STRING  -->

<?php 

$cadena_texto="hola mundo";

$longitud= strlen($cadena_texto); // variable cuantos caracteres tiene $cadena_texto
echo $longitud;


?>

<br>

<?php 

$cadena_texto="hola mundo php";

$longitud= strlen($cadena_texto); //cuantos caracteres tiene
echo $cadena_texto. " tiene " .$longitud. " caracteres <br> ";

$palabras=str_word_count($cadena_texto); // función cuantas palabras tiene
echo $cadena_texto. " tiene " .$palabras. " palabras <br> ";


?>
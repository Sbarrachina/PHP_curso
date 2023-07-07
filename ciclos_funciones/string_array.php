<?php 

$fecha_1="2021/11/29";
$fecha_2="2021/11/30";
$numeros="Uno Dos Tres Cuatro Cinco Seis Siete";

// creamos el array 
//$array_fecha=explode(delimitador,string);

$array_fecha=explode("/",$fecha_1);

echo $array_fecha[0]; // imprime 2021 porque esta la posicion [0] de 3

?>

<br>

<?php 

$fecha_1="2021/11/29";
$fecha_2="2021-11-30";
$numeros="Uno Dos Tres Cuatro Cinco Seis Siete";

// creamos el array 
//$array_fecha=explode(delimitador,string);

$array_fecha=explode("-",$fecha_2);

echo $array_fecha[2]; // imprime 30 porque esta la posicion [2] de 3

?>

<br>

<?php 

$fecha_1="2021/11/29";
$fecha_2="2021/11/30";
$numeros="Uno Dos Tres Cuatro Cinco Seis Siete";

// creamos el array 
//$array_fecha=explode(delimitador,string);

$array_numeros=explode(" ",$numeros); 

echo $array_numeros[6]; // imprime Siete porque esta la posicion [6] de 7

?>

<br>
<?php 

$fecha_1="2021/11/29";
$fecha_2="2021/11/30";
$numeros="Uno Dos Tres Cuatro Cinco Seis Siete";

// creamos el array 
//$array_fecha=explode(delimitador,string , limitador);
// solo quiero dividir en dos partes este string

$array_numeros=explode(" ",$numeros,2); // lo divide en dos partes

echo $array_numeros[1] ; // imprime Dos Tres Cuatro Cinco Seis Siete



?>

<br>
<?php 

$fecha_1="2021/11/29";
$fecha_2="2021/11/30";
$numeros="Uno Dos Tres Cuatro Cinco Seis Siete";

// creamos el array 
//$array_fecha=explode(delimitador,string , limitador);
// solo quiero dividir en dos partes este string

$array_numeros=explode(" ",$numeros,-1); // lo divide menos el último

echo $array_numeros[5] ; // imprime Seis ( todos los valores menos siete)



?>

<?php 

date_default_timezone_set("Europe/Madrid"); // la zona horaria 

echo date("d"); // dia 
echo date(" l"); // dia de la semana
echo date(" F"); // mes del año
echo date(" n") // mes numérico

?>

<br>

<?php 

$fecha_us=date("Y-m-d"); // el año , mes , dia ( hora americana)
echo $fecha_us;

$fecha_es=date(" d-m-Y "); // el año , mes , dia
echo $fecha_es;


?>

<br>

<?php 

date_default_timezone_set("Europe/Madrid"); // la zona horaria 


$fecha_us=date(" l d F Y"); // 
$fecha_es=date(" d-m-Y "); //

$hora_12=date(" h:i a");
$hora_24=date(" H:i A");


echo $fecha_us; // imprime  Saturday 08 July 2023
echo $hora_12;  // imprime 06:01 pm

echo $hora_24;  // imprime 18:02 PM


?>
<br>

<?php 

date_default_timezone_set("Europe/Madrid"); // la zona horaria 

$fecha_completa=date("d-m-Y h:i A");
echo $fecha_completa; //imprime 08-07-2023 06:05 PM


?>

<br>
<?php 

$fecha_actual = date('Y-m-d'); // Formato: Año-Mes-Día
$hora_actual = date('H:i:s'); // Formato: Hora:Minutos:Segundos

echo "Fecha actual: " . $fecha_actual . "<br>";
echo "Hora actual: " . $hora_actual;
//imprime Fecha actual: 2023-07-08
//        Hora actual: 18:17:24

?>
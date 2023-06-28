<?php 

function saludo(){
    echo "hola , mi nombre es Barbie";

}
saludo(); // añadiemos el nombre de la función par que se imprima en el navegador

saludo();

saludo();

?>

<br>

<?php 

function saludo2(){
    return "Hola , mi nombre es Ken";

}
$saludo=saludo2();
echo $saludo;



?>

<br>

<?php 
function hello($nombre){
    return "Hola , mi nombre es: $nombre";

}

echo hello("Sandy");

$usuario ="Ash";
echo hello($usuario);


?>

<br> <br>

<?php 

function promedio_alumno($nota_1,$nota_2,$nota_3){

$promedio=($nota_1+$nota_2+$nota_3) /3;
    return $promedio;

}

$promedio=promedio_alumno(7,9,6);
echo "El promedio es: $promedio";

// Para utilizar un parámetro dentro de la función debemos de colocar exactamente 
//el mismo nombre que hemos definido en los parámetros
?>
<br>
<!-- Manera más directa  -->
<?php 

function promedio_alumnos($nota_1,$nota_2,$nota_3){

$promedio=($nota_1+$nota_2+$nota_3) /3;
    return $promedio;

}

echo "El promedio es: ".promedio_alumno(7,9,6);
echo "<br>";
echo "El promedio es: ".promedio_alumno(8,1,6);
echo "<br>";
echo "El promedio es: ".promedio_alumno(7,4,6);
echo "<br>";
echo "El promedio es: ".promedio_alumno(2,9,8);
echo "<br>";
echo "El promedio es: ".promedio_alumno(7,9,3);


?>
<br>
<!-- incluir y llamar una función desde otro archivo php -->

<?php 

function promedios_alumnos($nota_1,$nota_2,$nota_3){

    $promedio=($nota_1+$nota_2+$nota_3) /3;
        return $promedio;
}


?>
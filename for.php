
<!-- -Diseñe un programa que imprima los números del 1 hasta el 20 
( incremento y decremento) -->

<?php 
//incremento 

for($i=1; $i<=20; $i++){
    echo $i. "<br>";
    // imprime 1234567891011121314151617181920

}

?>
<br>

<?php 
//decremento

for($i=20; $i>=1; $i--){
    echo $i;
    // imprime 2019181716151413121110987654321


}

?>
<br>


<!-- -Diseñe un programa que imprima la tabla de multiplicar de un número dado 
desde el factor 1 hasta el 12. ( incremento y decremento) -->

<!-- INCREMENTO -->
<?php 

$numero=7;
for($i=1; $i<=12; $i++){

    echo $i*$numero."<br>"; //multiplicar la variable contador por el $numero x7 
}

// imprime 71421283542495663707784

?>


<?php 

$numero=7;
for($i=1; $i<=12; $i++){

    echo $numero." X ".$i." = ".$i*$numero."<br>"; //multiplicar la variable contador por el $numero x7 
}


// imprime la tabla del 7 
// 7 X 1 = 7
// 7 X 2 = 14
// 7 X 3 = 21
// 7 X 4 = 28
// 7 X 5 = 35
// 7 X 6 = 42
// 7 X 7 = 49
// 7 X 8 = 56
// 7 X 9 = 63
// 7 X 10 = 70
// 7 X 11 = 77
// 7 X 12 = 84


?>
<br>
<!-- DECREMENTO-->

<?php 

$numero=7;
for($i=12; $i>=1; $i--){

    echo $i*$numero."<br>"; //multiplicar la variable contador por el $numero x7 
}

// imprime 84777063564942352821147 

?>


<?php 

$numero=7;
for($i=12; $i>=1; $i--){

    echo $numero." X ".$i." = ".$i*$numero."<br>"; //multiplicar la variable contador por el $numero x7 
}

// imprime tabla del 7 inversa 

// 7 X 12 = 84
// 7 X 11 = 77
// 7 X 10 = 70
// 7 X 9 = 63
// 7 X 8 = 56
// 7 X 7 = 49
// 7 X 6 = 42
// 7 X 5 = 35
// 7 X 4 = 28
// 7 X 3 = 21
// 7 X 2 = 14
// 7 X 1 = 7


?>


<br>

<!-- Ejemplo con Nombres  --> 
<!-- INCREMENTO -->
<?php 
$names = ["Juan", "María", "Pedro", "Ana", "Luis"];

for ($i = 0; $i < count($names); $i++) {
    echo "Nombre: " . $names[$i] . "<br>";
}


// imprime esto :
// Nombre: Juan
// Nombre: María
// Nombre: Pedro
// Nombre: Ana
// Nombre: Luis


?>
<br>

<?php 
$names = ["Juan", "María", "Pedro", "Ana", "Luis"];

for ($i = count($names) - 1; $i >= 0; $i--) {
    echo "Nombre: " . $names[$i] . "<br>";
}

// imprime 
// Nombre: Luis
// Nombre: Ana
// Nombre: Pedro
// Nombre: María
// Nombre: Juan


?>
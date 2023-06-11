
<?php 

$texto="El universo";

$variable_1=$texto;
$variable_2= &$texto;

echo $variable_1; // a esta variable le estamos asignando el valor directo de $texto


echo $variable_2; //  Esta variable va a tener el valor que tenga la variable $texto

// modificamos

$texto="el planera Marte";

echo $variable_1;
?>

<br>


<?php 

$texto="El universo";

$variable_1=$texto;
$variable_2= &$texto;

echo $variable_1; // a esta variable le estamos asignando el valor directo de $texto


// modificamos pero no cambia el texto a "Planeta Marta porque asocia el valor de la variable_1

$texto="Planera Marte";

echo $variable_1; // imprime El universoEl universo
?>

<br>

<?php 

$texto="El universo";

$variable_1=$texto;
$variable_2= &$texto; // asignacion por referencia

echo $variable_2; // tendrá el mismo valor que la variable $texto  imprime(El universo)


// modificamos el valor de $Texto 

$texto="Planera Marte";

echo $variable_2; // imprime planeta Marte

// $variable_2 tiene dos valores diferentes gracias a la asignación por referencia
?>

<!-- MAS EJEMPLOS -->
<br>
<?php 
$variable1 = 10;
$variable2 = &$variable1;

$variable2 = 20; // Modifica el valor de $variable1 también

echo $variable1; // Muestra 20
echo $variable2; // Muestra 20


?>
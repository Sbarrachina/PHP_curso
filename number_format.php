<?php 

$cantidad_1=12732.77;
$cantidad_2=1931.81;

// number_format(cantidad,decimales,sep_decimal,sep_millar); // parametros

echo number_format($cantidad_1); // pasar la cantidad, elimina decimales 
// imprime 12,733

?>

<br>

<!-- usando una variable y dos parámetros  -->

<?php 

$cantidad_1=12732.5;
$cantidad_2=1931.81;

// number_format(cantidad,decimales,sep_decimal,sep_millar); // parametros

$cantidad_1=number_format($cantidad_1,2);// dos parámetros ( cantidad.decimales)
echo $cantidad_1; // pasar la cantidad y que tenga dos decimales
// imprime 12,732.50

?>

<br>

<!-- usando una variable y los cuatro parámetros  -->


<?php 

$cantidad_1=12732.5;
$cantidad_2=1931.81;

// number_format(cantidad,decimales,sep_decimal,sep_millar); // parametros

$cantidad_2=number_format($cantidad_2,2,"." , ",");// 4 parámetros ( cantidad.decimales,sep_decimal,Sep_millar)
echo $cantidad_2; // pasar la cantidad y agrega el punto y la coma 
// imprime 1,931.81

?>

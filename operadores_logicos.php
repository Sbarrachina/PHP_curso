<?php 

$valor_1=7;
$valor_2=2;

var_dump($valor_1==7 && 2>3);// true +false = False

var_dump($valor_1==7 && 9>3); // true + true = True

?>

<br>

<?php 

$valor_1=7;
$valor_2=2;


var_dump($valor_1==7 || 9>3); // true or true = True

var_dump($valor_1==4 || 9>3); // false or true = True

var_dump($valor_1==4 || 1>3); // false or false = False

var_dump($valor_1==4 || 1>3 || $valor_2>10); // false or false or False = False

?>

<br>

<?php 

$valor_1=7;
$valor_2=2;


var_dump(!($valor_1==$valor_2));// 7 No es = 2 es falsa pero imprime la inversa TRUE
var_dump(!($valor_1>=$valor_2)) // 7 es mayor o igual que 2 true pero imprime false


?>
<br>
<!-- usando variables  -->
 <?php 
$valor_1=7;
$valor_2=2;

$resultado=!($valor_1>=$valor_2);
var_dump($resultado); // valor_1 es mayor o igual que valor_2 true pero imprime FALSE

?>
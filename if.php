<!-- Condicional Simple (if) -->

<?php 

if(1>=0){
echo "Expresión verdadera"; // imprime cuando la condición es verdadera

}


?>

<br>
<?php 

if(1>=8){
echo "Expresión verdadera"; //no se imprime porqué la condición no es verdadera

}


?>

<br>
 <!-- Código alternativo se utiliza cuando se utiliza html + php -->
 <?php 

if(9>=8):
    echo "Expresión verdadera con html"; //no se imprime porqué la condición no es verdadera

endif;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Altenativa sintaxis -->
<?php  if(9>=8):?>
    <h1>Expresion verdadera true</h1>
    <?php  endif;?> 

    <!-- sintaxis tradicional -->

    <?php

if (9 >= 8) {
    echo "<h1>Expresion verdadera true</h1>";
}
?>


</body>
</html>
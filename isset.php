
<!-- Cuando es nula (is_null)  -->
<?php 

$numero=NULL;

if(is_null($numero)){
    echo "La variable es nula";// imprime esta opcion 

}else{
 echo "No es Nula";

}


?>
<br>

<!-- Cuando eliminamos una variable (unset)  -->
<?php 

$numero=9;

unset($numero);

if(is_null($numero)){
    echo "La variable es nula";// imprime esta opcion 

}else{
 echo "No es Nula";

}


?>

<br>
<!-- Verifica si una variable esta vacia  (empty)  -->
<?php 

$numero=9;

if(empty($numero)){
    echo "Está vacia";

}else{
 echo "No esta vacia"; // imprime esta opcion 

}


?>

<br>

<?php 

$numero=0;

if(empty($numero)){
    echo "Está vacia"; // imprime esta opción por que 0 lo considera vacia

}else{
 echo "No esta vacia"; 

}


?>

<br>
<!-- Verifica si una variable esta definida y no es nula NULL (isset)  -->
<?php 

$nombre = "John Doe";

if (isset($nombre)) {
  echo "La variable \$nombre está definida y no es nula."; // imprime esta opcion
} else {
  echo "La variable \$nombre no está definida o es nula.";
}

?>
<br> <br>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="for.php" method="POST">
        <input type="text" name="numero">
        <button type="submit">Enviar</button>


    </form>    

</body>
</html>



<br> <br>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST"> <!-- form se envia al mismo archivo -->

        <input type="text" name="numeros">
        <button type="submit">Enviar</button>


    </form>    

<!--  hacerlo directamente la llamada php en el html no archivo php -->

    <?php 
        if(isset($_POST['numeros']) && $_POST['numeros']!=""){
            include "for.php";
        }
    
    ?>

</body>
</html>
<!-- 1- Calcular el total que una persona debe pagar
 en un taller de automóviles  por el cambio de una rueda.
  El precio por cada rueda es de 800$ si se cambian menos 
  de cinco ruedas, y si se cambian 5 o más les sale por 700 $ . -->


  <?php 
  
  $cantidad=9;

  if($cantidad<5){
    $total=$cantidad*800;

  }else{     
    $total=$cantidad*700;// 9*700 = 6300

  }
  echo "el total a pagar es de $".$total;// imprime el else (mayor que 5)
  
  ?>

  <br>

  <?php 
  
  $cantidad=4;

  if($cantidad<5){
    $total=$cantidad*800;// 4*800 = 3200 

  }else{     
    $total=$cantidad*700;

  }
  echo "el total a pagar es de $".$total;// imprime el if (menor que 5)
  
  ?>

<br>
<!--  sintaxis alternativo -->


<?php 
  
  $cantidad=9;

  if($cantidad<5):
    $total=$cantidad*800;

    else:    
    $total=$cantidad*700;// 9*700 = 6300

  echo "el total a pagar es de $".$total;// imprime el else (mayor que 5)
      endif;

  ?>

  <br>

  <?php 
  
  $cantidad=4;

  if($cantidad<5):
    $total=$cantidad*800;// 4*800 = 3200 

  else:    
    $total=$cantidad*700;

  endif;

  echo "el total a pagar es de $".$total;// imprime el if (menor que 5)
  
  ?>
  <br>

  <?php
// Cantidad de ruedas a cambiar
$cantidad_ruedas = 10;

// Precio por rueda
$precio_rueda = 800;

// Cálculo del total a pagar
if ($cantidad_ruedas < 5) {
    $total_pagar = $cantidad_ruedas * $precio_rueda;
} else {
    $precio_rueda = 700;
    $total_pagar = $cantidad_ruedas * $precio_rueda;
}

// Impresión del resultado
echo "El total a pagar es: " . $total_pagar . "$";
?>

<br>

<!-- 2-Determinar si un alumno aprueba o suspende un curso,
 sabiendo que aprobará si su promedio de tres calificaciones 
 es mayor o igual a 7.0, y suspenderá en caso contrario. -->

<?php 

$nota_1=7;
$nota_2=8;
$nota3=10;

$media=($nota_1 +$nota_2 +$nota3)/3; // Obtenemos media sumando notas y / 3

if($media>=5){
    echo "Estudiante aprobado con la nota: ".$media; // imprime if


}else{
    echo "Estudiante suspendido con la nota: ".$media;


}


?>
<br>
<?php 

$nota_1=6;
$nota_2=4;
$nota3=4;

$media=($nota_1 +$nota_2 +$nota3)/3; // Obtenemos media sumando notas y / 3

if($media>=5){
    echo "Estudiante aprobado con la nota: ".$media; 


}else{
    echo "Estudiante suspendido con la nota: ".$media;// imprime else


}


?>
<br>
<!-- sintaxis alterntiva -->

<?php 

$nota_1=7;
$nota_2=8;
$nota3=9;

$media=($nota_1 +$nota_2 +$nota3)/3; // Obtenemos media sumando notas y / 3

if($media>=5):
    echo "Estudiante aprobado con la nota: ".$media; // imprime if


else:
    echo "Estudiante suspendido con la nota: ".$media;


endif;


?>
<br>
<?php 

$nota_1=4;
$nota_2=5;
$nota3=4;

$media=($nota_1 +$nota_2 +$nota3)/3; // Obtenemos media sumando notas y / 3

if($media>=5):
    echo "Estudiante aprobado con la nota: ".$media; 


else:
    echo "Estudiante suspendido con la nota: ".$media;// imprime else


endif;


?>
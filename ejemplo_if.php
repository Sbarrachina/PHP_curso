
<!-- 1-Realizar un programa en donde se pide la edad del usuario;
  si es mayor de edad debe aparecer un mensaje indicándolo. 
 -->

<?php 
$edad=20;

if($edad>=18){
    echo"Eres Mayor de Edad";


}
?>

<!-- Sintaxis alternativa -->

<?php 
$edad=27;

if($edad>=18):
    echo"Eres Mayor de Edad chaval";

endif;
?>

<br>
<!-- 2-En un almacén se hace un 20 % de descuento a los 
clientes cuya compra supere los $100 ¿Cuál será la
 cantidad que pagara una persona por su compra? -->

 <?php 
 
 $total=120; // total de la compra 

 if($total>100){ // el total de la compra es mayor que 100

    $total=$total-($total*0.20); // 120 - (120 * .20) = 96

 }
 
    echo "El total a pagar es de : $ {$total}";
 ?>

<br>
<?php 
 
 $total=90; // total de la compra 

 if($total>100){ // el total de la compra es mayor que 100

    $total=$total-($total*0.20); // 120 - (120 * .20) = 96

 }
 
    echo "El total a pagar es de : $".$total; // no se le aplica porque no llega a los 100
 ?>

<br>
<!-- sintaxis alternativa -->

<?php 
 
 $total=100; // total de la compra 

 if($total>100): // el total de la compra es mayor que 100

    $total=$total-($total*0.20); // 120 - (120 * .20) = 96

 endif;
 
    echo "El total a pagar es de : $".$total; // no se le aplica porque no llega a los 100
 ?>
<br>
<?php
$compra = 140; // Supongamos que el total de la compra es $120

if ($compra > 100) {
    $descuento = $compra * 0.2; // Calculamos el descuento (20% de la compra)
    $total = $compra - $descuento; // Restamos el descuento al total de la compra
    echo "El total a pagar con descuento es: $" . $total;
} else {
    echo "El total a pagar es: $" . $compra;
}
?>
<br>
<!-- sintaxis alternativa -->

<?php
$compra = 90; // Supongamos que el total de la compra es $120

if ($compra > 100):
    $descuento = $compra * 0.2; // Calculamos el descuento (20% de la compra)
    $total = $compra - $descuento; // Restamos el descuento al total de la compra
    echo "El total a pagar con descuento es: $" . $total;

else:
    echo "El total a pagar es: $" . $compra; //imprime 90 no llega a 100
endif;

?>

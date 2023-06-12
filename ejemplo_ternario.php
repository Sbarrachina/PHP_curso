<!-- 1- Hacer un programa que calcule el total a pagar por la compra de camisas.
 Si se compran tres camisas o mas se aplica un descuento del 20% sobre 
 el total de la compra y sin son menos de tres camisas un descuento del 10 %. -->

 <?php 
 
 $camisas=7;
 $precio=10;

 $total=$camisas*$precio; // 7*70 =70 
                                    // 1        // 2
 $total=($camisas>=3)? $total-($total*0.20):$total-($total*0.10);
 // 1 operador ternario se aplica el 20% mas de 3 camisas 
  // 2 operador ternario se aplica el 10% menos de 3 camisas 
  // 70 - (70*0.20) | 70-(14) =56 
 
 echo "El total a pagar es $".$total; // imprime 56 se le aplica el 20%
 
 ?>

 <br>
 <?php 
 
 $camisas=2;
 $precio=10;

 $total=$camisas*$precio; // 2*10 = 20
                                    // 1        // 2
 $total=($camisas>=3)? $total-($total*0.20):$total-($total*0.10);
 // 1 operador ternario se aplica el 20% mas de 3 camisas 
  // 2 operador ternario se aplica el 10% menos de 3 camisas 
  // 20 - (20*0.10) | 20 (2) = 18
 
 echo "El total a pagar es $".$total; // imprime 18 se le aplica el 10%
 
 ?>
 <br>

 <!-- otra manera de hacerlo -->
 <?php 
 
 $camisas=2;
 $precio=10;

 $total=$camisas*$precio; // 2*10 = 20
                                    // 1        // 2
 ($camisas>=3)? $total= $total-($total*0.20):$total=$total-($total*0.10);
 // 1 operador ternario se aplica el 20% mas de 3 camisas 
  // 2 operador ternario se aplica el 10% menos de 3 camisas 
  // 20 - (20*0.10) | 20 (2) = 18
 
 echo "El total a pagar es $".$total; // imprime 18 se le aplica el 10%
 
?>


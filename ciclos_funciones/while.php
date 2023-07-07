<!-- 1- Diseñe un programa que imprima los números del 1 hasta el 20.
 ( incremento y decremento). -->


 <?php 
 
 $c=1; // la variable contador 

 while($c<=20){ // mientras la variable sea menor o igual a 20. Repetimos el código

    echo $c. "<br>";  // mostramos el valor que sería uno    
         $c++; // con el operador de incremento sumaría +1
                // iteración ( que repite el código, que en esta caso es 20)

            // imprime 1234567891011121314151617181920
 } 
 
 ?>

 <!-- Ahora de manera inversa -->
<br>
 <?php 
 
 $c=20; // la variable contador 

 while($c>=1){ // mientras la variable sea menor o igual a 1. Repetimos el código

    echo $c;  // mostramos el valor que sería uno    
         $c--; // con el operador de incremento resta 1
                // iteración ( que repite el código, que en esta caso es 20)

                // imprime 2019181716151413121110987654321
 } 
 
 ?>
 
 <br>
 
 <!-- 2- Diseñe un programa que imprima la tabla de multiplicar de un número
  dado, desde el factor 1 hasta el 12.( incremento y decremento). -->

  <!-- INCREMENTO -->
  <?php 
  
  $c=1;
  $num= 7;

  while($c<=12){
   echo $num*$c. "<br>"; // multiplique la tabla del 7 
   $c++; // para que se incremente la tabla

  }
   //imprime  71421283542495663707784
  ?>

 <br>
 <!--  el mismo proceso pero usando un string ( texto) -->
<?php 
  
  $c=1;
  $num= 7;

  while($c<=12){
   echo $num. "X".$c." = ".$num*$c."<br>"; // multiplique la tabla del 7 y incluye "x" "="
   $c++; // para que se incremente la tabla

  }
   //imprime  
   //7X1 = 7
   // 7X2 = 14
   // 7X3 = 21
   // 7X4 = 28
   // 7X5 = 35
   // 7X6 = 42
   // 7X7 = 49
   // 7X8 = 56
   // 7X9 = 63
   // 7X10 = 70
   // 7X11 = 77
  // 7X12 = 84
  ?>

<!-- DECREMENTO  -->
<br>
<?php 
  
  $c=12;
  $num= 5;

  while($c>=1){
   echo $num. "X".$c." = ".$num*$c."<br>"; // multiplique la tabla del 5 y incluye "x" "="
   $c--; // para que se decremente  la tabla

  }
   //imprime  71421283542495663707784
  ?>

 
 <!--  el mismo proceso pero usando un string ( texto) -->
<?php 
  


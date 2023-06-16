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

 <?php 
 
 $c=20; // la variable contador 

 while($c>=1){ // mientras la variable sea menor o igual a 1. Repetimos el código

    echo $c;  // mostramos el valor que sería uno    
         $c--; // con el operador de incremento resta 1
                // iteración ( que repite el código, que en esta caso es 20)

                // imprime 2019181716151413121110987654321
 } 
 
 ?>
 
 
 
 
 
 
 

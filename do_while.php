
<!-- - Diseñe un programa que imprima los números del
 1 hasta el 20. ( incremento y decremento). -->

 <!-- INCREMENTO  -->
<?php 

$s=1;

do{

    echo $c. "<br>";
    $c++;

}while($c<=20)

//imprime 1234567891011121314151617181920


?>
<br>

<!-- DECREMENTO -->
<?php 

$c=20;

do{

    echo $c. "<br>";
    $c--;

}while($c>=1)

//imprime 2019181716151413121110987654321


?>
<br>


<!--  Diseñe un programa que imprima la tabla de multiplicar
 de un número dado, desde el factor 1 hasta el 12.( incremento y decremento).
 -->

 <!-- INCREMENTO -->
 <?php 
  
  $c=1;  // 1 x 5
  $num= 5;

  do{
    echo $num*$c. "<br>"; // multiplique la tabla del 5
    $c++;


  }while($c<=12)
  
?>
<br>

<!-- usando string "X" "=" -->
<?php 
  
  $c=1;  // 1 x 5
  $num= 5;

  do{
    echo $num. "X".$c." = ".$num*$c."<br>"; // multiplique la tabla del 5 y incluye "x" "="
    $c++;


  }while($c<=12)

//   Imprime la tabla del 5 
//   5X1 = 5
//   5X2 = 10
//   5X3 = 15
//   5X4 = 20
//   5X5 = 25
//   5X6 = 30
//   5X7 = 35
//   5X8 = 40
//   5X9 = 45
//   5X10 = 50
//   5X11 = 55
//   5X12 = 60
  
?>
<br>
<!-- decremento -->
<?php 
 
  
  $c=12;  // 1 x 7
  $num= 7;

  do{
    echo $num. "X".$c." = ".$num*$c."<br>"; // multiplique la tabla del 5 y incluye "x" "="
    $c--;


  }while($c>=1)

// imprime de manera inversa la tabla 

// 7X12 = 84
// 7X11 = 77
// 7X10 = 70
// 7X9 = 63
// 7X8 = 56
// 7X7 = 49
// 7X6 = 42
// 7X5 = 35
// 7X4 = 28
// 7X3 = 21
// 7X2 = 14
// 7X1 = 7
  
?>
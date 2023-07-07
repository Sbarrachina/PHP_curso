<?php 

echo pow(5,3); // sirve para elevar un exponente lo que es un número
// imprime 125 5x5x5

?>

<br>
<?php 

echo sqrt(9); // sirve para calcular la raiz cuadrada de un número
// imprime 3

?>

<br>
<?php 

echo rand(70,100); // sirve para calcular un numero aleatoriamente desde
              // un número mínimo hasta uno máximo. 
// imprime un número aleatorio cada vez que actualizamos 70...

?>

<br>
<?php 

echo pi(); // sirve para optener el número pi
// imprime 3.1415926535898

?>

<br>
<?php 

// sirven para redondear número a un entero

 echo floor(9.99); // rendondea hacia abajo ( quita decimales)
 echo "<br>";
 echo ceil(9.99); // redonde hacia arriba ( hacia el siguiente número)
// imprime 9 y 10

?>

<br>
<?php 

// sirven para redondear número a un entero

 echo floor(-3.4); // rendondea hacia numero proximo 
 echo "<br>";
 echo ceil(-3.4); // redonde -3
// imprime -4 , -3

?>

<br>
<?php 

// sirven para redondear número que contenga decimales 

 echo round(1.955,2); // rendondea a enteros, su número próximo
 
// imprime 1.96

?>
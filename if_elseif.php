<!-- 1- Se desea diseñar un programa que escriba los nombres de los 
días de la semana en función del valor de una variable DIA. -->


<?php 

$dia=0;

if($dia==1){
    echo "lunes";

}elseif($dia==2){
    echo "martes";

}elseif($dia==3){
    echo "miercoles";

}elseif($dia==4){
    echo "jueves";

}elseif($dia==5){
    echo "viernes";

}elseif($dia==6){
    echo "sabado";

}elseif($dia==7){
    echo "domingo";

}else{
    echo "Error valor no valido"; // imprime else no cumple ningún valor
}


?>

<br>


<!-- sintaxis alternativa |sintaxis de colon -->
<?php 

$dia=5;

if($dia==1):
    echo "lunes";

elseif($dia==2):
    echo "martes";

elseif($dia==3):
    echo "miercoles";

elseif($dia==4):
    echo "jueves";

elseif($dia==5):
    echo "viernes";// imprime viernes 

elseif($dia==6):
    echo "sabado";

elseif($dia==7):
    echo "domingo";

else:
    echo "Error valor no valido"; 

endif;


?>

<br>
<!-- 2- En una tienda de ordenadores se plantea ofrecer a los clientes un
descuento que dependerá del número de ordenadores que compre.
Si los ordenadores son menos de cinco se les dará un 10% de
descuento sobre el total de la compra.; si el número de ordenadores
es mayor o igual a cinco pero menos de diez se le otorga un 20 %
de descuento; y si son 10 o más se les da un 40 % de descuento.
El precio de cada ordenador es de 700 €. -->
<br>
<?php 

$cantidad=3;
$total=$cantidad*700; // 3*700=2100€

if($cantidad<5){  
    $total=$total-($total*0.10); // calculo descuento 10%

    //2100 -(2100*0.10) 
    //2100 - (210) = 1890 €

}elseif($cantidad>=5 && $cantidad<10){ // mayor o igual a cinco y es menor de 10
    $total=$total-($total*0.20); // calculo descuento 20%



}elseif($cantidad>=10){ // mayor de 10
    $total=$total-($total*0.40); // calculo descuento 40%


}

echo "El total a pagar es €" .$total;// imprime €1890
//

?>
<br>

<!-- sintaxis alternativa |sintaxis de colon -->

<?php 

$cantidad=12;
$total=$cantidad*700; // 12*700=8400€

if($cantidad<5):
    $total=$total-($total*0.10); // calculo descuento 10%

   

elseif($cantidad>=5 && $cantidad<10): // mayor o igual a cinco y es menor de 10
    $total=$total-($total*0.20); // calculo descuento 20%



elseif($cantidad>=10): // mayor de 10
    $total=$total-($total*0.40); // calculo descuento 40%

     //8400 -(8400*0.40) 
    //8400 - (3360) = 5040 €




echo "El total a pagar es €" .$total;// imprime €5040 

endif;

//

?>
<!-- salir de ciclo en el ciclo while -->

<?php 

$c=1;
while($c<=20){
    echo $c. "<br>";
//le diremos que cuando llegue a 10 se detenga el ciclo 
//utilizaremos la sentencia Break para hacerlo

    if($c==10){ // 10 es igual 10 entonces se detiene.
        break; // imprimirá solo 12345678910

    }
    $c++;
}

?>

<br>

<!-- salir de ciclo en el ciclo foreach -->

<?php 

$pc=["SO","SSD","GPU","RAM","CPU"];
foreach($pc as $componente){
    echo $componente."<br>";
    if($componente=="GPU") { // cuando recorra y llegue a GPU que se detenga
        break;           // imprime SO SSD GPU
     
    }            
}

?>

<br>

<!-- usando continue en un foreach  -->

<?php 

$pc=["Batman","Superman","GreenArrow","WonderWoman","Flash"];
foreach($pc as $superheroe){
    if($superheroe=="GreenArrow") { // cuando recorra y llegue a GreenArrow lo salta no aparece
        continue;           // imprime Batman Superman WonderWoman Flash
     
    }       
    echo $superheroe."<br>";
     
}

?>

<br>

<!-- usando continue en un for -->

<?php 

for($i=1; $i<=10; $i++){
    if($i==5)
    continue;                // cuando llegue a 5 lo saltará 
    echo $i."<br>";  // imprime 1234678910

}

?>


<br>

<!-- usando continue en un ciclo while  -->

<?php 

$i=1;
while($i<=10){
    if($i==3){   // // cuando llegue a 3 lo saltará 
    $i++;
    continue;     
}          
    echo $i."<br>";  // imprime 1245678910
    $i++;

}

?>
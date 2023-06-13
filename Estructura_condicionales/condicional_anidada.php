<!-- 1- Pida a un usuario la edad y el género, para que el ordenador 
le indique si ya puede jubilarse. Tome en cuenta que un Hombre
 se puede jubilar cuando tenga 60 años o más, en cambio, 
 una mujer si tiene 54 años.  -->

 <?php 
 
$edad=60;
$genero="M";

if($genero=="M"){
    if($edad>=60){
            echo "puede jubilarse hombre"; // imprime jubilarse
    }else{
            echo "no puede jubilarse";
    }

}elseif($genero=="F"){

    if($edad>54){
        echo "puede jubilarse";
}else{
        echo "no puede jubilarse";
}

}else{
    echo "Coloque una opción correcta";
}
 
 ?>

 <br>


 <?php 
 
 $edad=45;
 $genero="F";
 
 if($genero=="M"){
     if($edad>=60){
             echo "puede jubilarse"; 
     }else{
             echo "no puede jubilarse";
     }
 
 }elseif($genero=="F"){
 
     if($edad>54){
         echo "puede jubilarse";
 }else{
         echo "no puede jubilarse Mujer";// imprime jubilarse
 }
 
 }else{
     echo "Coloque una opción correcta";
 }
  
  ?>
 <br>


 <!-- Sintaxis colon -->
<?php 
 
$edad=60;
$genero="J";

if($genero=="M"):
    if($edad>=60):
            echo "puede jubilarse hombre"; // imprime jubilarse
    else:
            echo "no puede jubilarse";
    endif;
 
elseif($genero=="F"):

    if($edad>54):
        echo "puede jubilarse";
    else:
        echo "no puede jubilarse";
        
    endif;

    else:
    echo "Coloque una opción correcta"; // Imprime esta opcion 
    endif;
 
 ?>


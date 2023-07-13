<?php 
    if(isset($_POST['numero']) && $_POST['numero']!=""){
        
        $numero=10;
        for($i=12; $i>=1; $i--){
            echo $numero." X ".$i. " = ".$i*$numero."<br>";
        }
    }else{
        echo "No definida";
    }
    // Si esta variable viene definida va a devolver true
    // si el valor es distinto a una cadena vacia devuelve True
    // imprime 
            // 10 X 12 = 120
            // 10 X 11 = 110
            // 10 X 10 = 100
            // 10 X 9 = 90
            // 10 X 8 = 80
            // 10 X 7 = 70
            // 10 X 6 = 60
            // 10 X 5 = 50
            // 10 X 4 = 40
            // 10 X 3 = 30
            // 10 X 2 = 20
            // 10 X 1 = 10

?>

<br>

<?php 
    if(isset($_POST['numero']) && $_POST['numero']!=""){
        
        $numero=$_POST['numero'];
        for($i=12; $i>=1; $i--){
            echo $numero." X ".$i. " = ".$i*$numero."<br>";
        }
    }else{
        echo "No definida";
    }
    // Si esta variable viene definida va a devolver true
    // si el valor es distinto a una cadena vacia devuelve True
    // imprime la tabla del 7 , añadido este número en el form

    // 7 X 12 = 84
    // 7 X 11 = 77
    // 7 X 10 = 70
    // 7 X 9 = 63
    // 7 X 8 = 56
    // 7 X 7 = 49
    // 7 X 6 = 42
    // 7 X 5 = 35
    // 7 X 4 = 28
    // 7 X 3 = 21
    // 7 X 2 = 14
    // 7 X 1 = 7

    ?>

<br>
<!--  con el form action vacio se llama desde la función include "for" -->

<?php 

$numeros=$_POST['numeros'];
for($i=12; $i>=1; $i--){
    echo $numeros." X ".$i. " = ".$i*$numeros."<br>";
}
    // imprime la tabla del 5 , añadido este número en el form
    // 5 X 12 = 60
    // 5 X 11 = 55
    // 5 X 10 = 50
    // 5 X 9 = 45
    // 5 X 8 = 40
    // 5 X 7 = 35
    // 5 X 6 = 30
    // 5 X 5 = 25
    // 5 X 4 = 20
    // 5 X 3 = 15
    // 5 X 2 = 10
    // 5 X 1 = 5

?>
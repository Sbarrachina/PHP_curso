<?php 

$fruta="Fresa";

switch($fruta){ 
    case "Fresa":  // compara
        echo "Eres una Fresa"; // imprime Fresa por que cumple condición
        break;

        case "Pera": 
            echo "Eres una Pera";
            break; //cerrar expresión 
            default: // mostrar un valor por defecto
            echo "No eres ni Fresa ni Pera";

}

?>

<br>

<!-- Dado un número del 1 al 5, el siguiente código utiliza la estructura
de control switch para determinar el número ingresado y mostrar un
mensaje correspondiente. -->

<?php 
$numero = 3;
$mensaje = "";

switch ($numero) {
    case 1:
        $mensaje = "Has ingresado el número 1. Es el primer número natural.";
        break;

    case 2:
        $mensaje = "Has ingresado el número 2. Es el único número par primo.";
        break;

    case 3:
        $mensaje = "Has ingresado el número 3. Es el primer número primo.";
        break;

    case 4:
        $mensaje = "Has ingresado el número 4. Es el primer número compuesto.";
        break;

    case 5:
        $mensaje = "Has ingresado el número 5. Es el segundo número primo.";
        break;

    default:
        $mensaje = "El número ingresado no se encuentra en el rango de 1 a 5.";
}

echo $mensaje; // imprime el case 3 

?>

<br>

<!-- 1- Se desea diseñar un programa que escriba los nombres de los días de la
semana en función del valor de una variable DIA. Los días de la semana son 7;
por consiguiente, el rango de valores de DIA será 1-7, y en el caso que el
valor este fuera del rango se deberá producir un mensaje 
de error advirtiendo la situación anómala. -->

<?php 
$dias = "Jueves";
$mensaje = "";

switch ($dias) {
    case "Lunes":
        $mensaje = "Hoy es Lunes. ";
        break;

    case "Martes":
        $mensaje = "Martes un día más";
        break;

    case "Miercoles":
        $mensaje = "Miercoles la mitad de la semana";
        break;

    case "Jueves":
        $mensaje = "Jueves que cerca está el fin de semana.";
        break;

    case "Viernes":
        $mensaje = "Por fin es viernes ";
        break;



    case "Sabado":
        $mensaje = "Hoy es Sabado a descansar";
        break; 
        
    case "Domingo":
        $mensaje = "Hoy es Domingo no hay que madrugar";
        break;    

    default:
        $mensaje = "El día ingresado no se encuentra en el rango de lunes a domingo.";
}

echo $mensaje; // imprime el case Jueves 



?>

<br>

<!--  En lugar de usar la variable $mensaje una Echo -->
<?php 

$dia = 10;

switch ($dia) {
    case 1:
        echo "Lunes";
        break;

    case 2:
        echo "Martes";
        break;

    case 3:
        echo "Miercoles";
        break;

    case 4:
        echo "Jueves";
        break;

    case 5:
        echo "Viernes";
        break;

    case 6:
        echo "Sabado";
        break;

    case 7:
        echo "Domingo";
        break;
        default:
        echo "Creo que algo falla. "; // imprime el mensaje de error
}


?>



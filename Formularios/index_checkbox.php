<?php 

$materias=$_POST['asignatura'];
foreach($materias as $asignatura){

echo $asignatura. "<br>";

}

echo "<br>";
echo "<br>";
echo "<br>";

//  checkbox multimple

$fresa=$_POST['frutas'];
foreach($fresa as $fruta){

    echo $fruta. "<br>";
}
?>
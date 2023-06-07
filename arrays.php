
<!-- Arrays indexados o escalares version antigua -->

<?php 
$estudiantes=array("Lois", "Clark","Marta","jonatan");

//Array modificado de Clark pasa a ser Kent
$estudiantes[1]="Kent";

echo $estudiantes[1];

?>


<!-- Arrays indexados o escalares version moderna usando [ ] en lugar de parentesís -->

<?php 
$estudiante=["Juana", "Lucas","Julia","Josefa"];

//Array modificado de Josefa pasa a ser Maria
$estudiante[3]="Maria";

echo $estudiante[3];

?>

<!-- Con multiples valores letras, números... -->

<?php 
$estudiante=["Juana", "Lucas","Julia","Josefa",7];

//Array modificado de Josefa pasa a ser Maria
$estudiante[3]="Maria";

echo $estudiante[4];

?>


<!-- Arrays Asociativo (cada valor tiene asociado una clave) Clave "nombre" valor "Sara"   -->

<?php 

$tutor=[
    "nombre"=>"Sara",
    "apellido"=>"Lopez",
    "edad"=> 27
];

// modificar el array del edad 27 a 19
$tutor["edad"] =19;

echo $tutor["edad"];


?>

 <!-- Arrays Multidemesionales Un array dentro de otro Array -->

 <?php 
 
 $tutor_2=[
    "nombre"=>"Mirian ",
    "apellido"=>"Gomez",
    "edad"=> 20,
    "cursos"=> ["PHP","Python","CSS"]

];

// modificar el array cursos que Python pase a ser Javascript

$tutor_2 ["cursos"][1]="Javascript";


echo $tutor_2["cursos"] [1];
 ?>

 <!-- Arrays Multidemesionales Un array dentro de otro Array -->
 <!-- añador un asociativo al array que hemos creado -->

 <?php 
 
 $tutor_2=[
    "nombre"=>"Mirian ",
    "apellido"=>"Gomez",
    "edad"=> 20,
    "cursos"=>["nombre"=>"Mirian ","apellido"=>"Gomez","edad"=> 27,]

];

echo $tutor_2["cursos"]["apellido"];
 ?>


<!-- agregar mas claves y más valores aunque lo tengamos definido el array -->

<?php 
 
 $tutor_2=[
    "nombre"=>"Mirian ",
    "apellido"=>"Gomez",
    "edad"=> 20,
    "cursos"=> ["PHP","Python","CSS"]

];

// modificar creamos una nueva clave llamado pais y le damos el valor de Australia

$tutor_2 ["pais"]="Australia";


echo $tutor_2["pais"];
 ?>

 <!-- Contar los elementos que contiene un Array  con count ()-->

<?php 

// tipo escalar
$peliculas=["comedia","Drama","musical","fantasia"];

//tipo asociativo

$titulo=[
    "nombre"=>"Grease",
    "genero"=> "musical",
    "año"=> "1978"
];

//tipo multiple 

$titulo_2=[
    "nombre"=>"Ghost",
    "genero"=>"fantasia",
    "año"=> "1988",
    "actores"=> ["Patrick","Travolta","Moore"]
];

echo count($peliculas); //4
echo count($titulo);  //3
echo count($titulo_2); //4

// contar todos los elementos de un array multidimensional con COUNT_RECURSIVE

echo count($titulo_2,COUNT_RECURSIVE); //7
?>



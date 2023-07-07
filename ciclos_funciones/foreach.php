<?php 

$laptop=["Acer Nitro 5", "windows 11","AMD Ryzen 5 4660H","SSD 256GB","RAM 24GB"];

$frutas=[
    "Fresas"=>100,
    "Peras"=>30,
    "Sandias"=>10,
    "Melocotones"=>17,
    "Manzanas"=>9
];

foreach($laptop as $valor){ // arrays + variable 
    echo $valor."<br>";
}


?>

<br>

<?php 

$laptop=["Acer Nitro 5", "windows 11","AMD Ryzen 5 4660H","SSD 256GB","RAM 24GB"];

$frutas=[
    "Fresas"=>100,
    "Peras"=>30,
    "Sandias"=>10,
    "Melocotones"=>17,
    "Manzanas"=>9
];

foreach($laptop as $clave => $valor){ // recorrer el valor como la clave 
    echo $clave. "-" .$valor."<br>";
}


?>

<br>

<?php 
$frutas=[
    "Fresas"=>100,
    "Peras"=>30,
    "Sandias"=>10,
    "Melocotones"=>17,
    "Manzanas"=>9
];

foreach($frutas as $valor){ // arrays + variable 
    echo $valor."<br>"; // imprimer el valor 1003010179
}


?>

<br>

<?php 

$frutas=[
    "Fresas"=>100,
    "Peras"=>30,
    "Sandias"=>10,
    "Melocotones"=>17,
    "Manzanas"=>9
];

foreach($frutas as $clave => $valor){ // recorrer el valor como la clave 
    echo "Hay " .$valor. " " .$clave. " en el inventario". "<br>";
}




?>

<!-- Ejemplo usando un array de base de datos multidimensional -->
<br>

<?php 
$productos = [
    
    ["codigo" => "A001","descripcion"=> "Mouse"], // clave y su valor 
    ["codigo" => "A002","descripcion"=> "Teclado"],
    ["codigo" => "A003","descripcion"=> "Monitor"],
    ["codigo" => "A004","descripcion"=> "Impresora"]
    
    ];

    foreach($productos as $prod){
            echo $prod["codigo"]. " - " .$prod["descripcion"]."<br>";

    }

    ?>
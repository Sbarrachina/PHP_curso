<?php 

date_default_timezone_set("Europe/Madrid"); // la zona horaria 

// creamos una función para crear nuetra fecha en español

function fecha_espanol_larga(){
    $fecha_dia=date("d");
    $fecha_mes=date("m");
    $fecha_year=date("Y");

    //array dias de la semana

    $dia_semana=[
        "Monday" => "Lunes",
        "Tuesday" => "Martes",
        "Wednesday" => "Miercoles",
        "Thursday" => "Jueves",
        "Friday" => "Viernes",
        "Saturday" => "Sabado",
        "Sunday" => "Domingo"


    ];

    // array meses del año 

    $mes_year=[
        "01" => "Enero",
        "02" => "Febrero",
        "03" => "Marzo",
        "04" => "Abril",
        "05" => "Mayo",
        "06" => "Junio",
        "07" => "Julio",
        "08" => "Agosto",
        "09" => "Septiembre",
        "10" => "Octubre",
        "11" => "Noviembre ",
        "12" => "Diciembre "


    ];

    // variable donde almacenar esa fecha

    $fecha_final=$dia_semana[date("l")]." ".$fecha_dia." de "
    .$mes_year[$fecha_mes]." de ".$fecha_year;

    return $fecha_final;

}

echo fecha_espanol_larga(); // imprime Sabado 08 de Julio de 2023

echo "<br>";

// versión corta

function fecha_espanol_corta($fecha=" "){

    if($fecha==""){
        $fecha=date("d-m-Y");
    }else{
        $fecha=date("d-m-Y",strtotime($fecha));

    }

    $fecha = explode("-", $fecha);


    $fecha_dia=$fecha[0];
    $fecha_mes=$fecha[1];
    $fecha_year=$fecha[2];


    
    // array meses del año 

    $mes_year=[
        "01" => "Enero",
        "02" => "Febrero",
        "03" => "Marzo",
        "04" => "Abril",
        "05" => "Mayo",
        "06" => "Junio",
        "07" => "Julio",
        "08" => "Agosto",
        "09" => "Septiembre",
        "10" => "Octubre",
        "11" => "Noviembre ",
        "12" => "Diciembre "


    ];

    $fecha_final=$fecha_dia." de ".$mes_year[$fecha_mes]." de ".$fecha_year;

    return $fecha_final;

}

echo fecha_espanol_corta(); // imprime 08 de Julio de 2023
echo "<br>";
echo fecha_espanol_corta(" 01-01-2023"); // imprime el parametro que indiquemos

?>


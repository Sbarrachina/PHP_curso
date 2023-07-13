<?php 

echo $_FILES['fichero']['name']."<br>"; // recibe el nombre
echo $_FILES['fichero']['tmp_name']."<br>"; // recibir la ruta donde se encuentra el archivo temporal para luego moverlo a una carpeta 
echo $_FILES['fichero']['type']."<br>"; // recibe el tipo
echo $_FILES['fichero']['error']."<br>"; // error
echo $_FILES['fichero']['size']."<br>"; // tamaño en bytes

// nos aparecen los metadatos de la foto con las 5 opciones 

?>

<br> <br>

<!--  opción si el directorio no existe lo creamos -->
<!--  sube el archivo y crea la carpeta archivos   -->

<?php 

if(!file_exists('./archivos')) { //  funcion que comprueba si un directorio existe
    if(!mkdir("archivos",0777)){ // crea un directorio, 0777 permisos de escritura
        echo " Error al crear el directorio";
        exit(); // detenermos la ejecución del script

        }
    }

    // Con la carpeta archivos creada subimos el archivo a ella. con esta opción

    chmod("archivos",0777);

    if(move_uploaded_file($_FILES['fichero']['tmp_name'], "./archivos/" 
    . $_FILES['fichero']['name'])){
        echo "Archivo subido con éxito";
    } else { 
        echo "Error al subir el archivo";
    }
    
    // enviamos el archivo a la carpeta archivos



 ?>

 
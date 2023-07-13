<?php 
// <!--  limitar el formato de archivos, seleccionar archivos específicos -->



if(mime_content_type($_FILES['fichero']['tmp_name'])!="image/jpeg" && 
mime_content_type($_FILES['fichero']['tmp_name'])!="image/png"){

    echo "tipo de fichero no admitido"; // al inspeccionar y borrar accept=".jpg .png .jpge" sale el mensaje
    exit();

}


//  limitar la carga de archivos a 3mb



if(mime_content_type($_FILES['fichero']['tmp_name'])!="image/jpeg" && 
mime_content_type($_FILES['fichero']['tmp_name'])!="image/png"){

    echo "tipo de fichero no admitido"; // al inspeccionar y borrar accept=".jpg .png .jpge" sale el mensaje
    exit();

}


 if(($_FILES['fichero']['size']/1024)>3072){ // calculamos cuanto pesa en kilobytes
    
    echo "tipo de fichero supera el peso admitido"; // al inspeccionar y borrar accept=".jpg .png .jpge" sale el mensaje
    exit();


 }
 ?>
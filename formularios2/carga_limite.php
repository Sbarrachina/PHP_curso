<?php 


// Limitar el formato de archivos al tipo "application/pdf"
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (mime_content_type($_FILES['fichero']['tmp_name']) == "application/pdf") {
        echo "Archivo PDF admitido";
    } else {
        echo "Tipo de archivo no admitido. Solo se permiten archivos PDF.";
        exit();
    }
}


// -------------



 
 

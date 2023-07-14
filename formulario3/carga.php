<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificamos si se ha enviado una solicitud POST desde el formulario

    // Verificamos el tipo de fichero

    if (mime_content_type($_FILES['fichero']['tmp_name']) != "image/jpeg" && 
        mime_content_type($_FILES['fichero']['tmp_name']) != "image/png") {
        echo "Tipo de fichero no admitido. Solo se permiten archivos JPEG y PNG.";
        exit();
    }
    // Verificamos el tamaño del fichero

    if ($_FILES['fichero']['size'] > 3 * 1024 * 1024) {
        echo "Tamaño de fichero supera el límite admitido (3MB)";
        exit();
    }
    // Verificamos si el directorio de destino existe, si no, lo creamos

    if (!file_exists('./archivos')) {
        if (!mkdir('./archivos', 0777)) {
            echo "Error al crear el directorio";
            exit();
        }
    }
    // Movemos el fichero subido al directorio de destino

    if (move_uploaded_file($_FILES['fichero']['tmp_name'], './archivos/' . $_FILES['fichero']['name'])) {
        echo "Archivo subido con éxito";
    } else {
        echo "Error al subir el archivo";
    }
}
?>

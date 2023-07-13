<?php
if(isset($_FILES['archivo']) && $_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
    $nombre_archivo = $_FILES['archivo']['name'];
    $archivo_temporal = $_FILES['archivo']['tmp_name'];
    $ruta_destino = './files/' . $nombre_archivo;

    if(move_uploaded_file($archivo_temporal, $ruta_destino)) {
        echo "El archivo se ha subido correctamente.";
    } else {
        echo "Ha ocurrido un error al subir el archivo.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carga de archivo</title>
</head>

<body>

    <h3> Subir con PHP limitador archivos</h3>
    <form action="./carga_limite.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="fichero" accept=".pdf"> 
        <br><br>
        <button type="submit">Enviar</button>

<!-- accept "los formatos que no son admitidos en la subida" -->

    </form>
    <br><br>

<h3> Subir con PHP limitador peso</h3>
<form action="./carga-limite.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="fichero" accept=".jpg .png .jpeg"> 
    <br><br>
    <button type="submit">Enviar</button>


</body>

</html>
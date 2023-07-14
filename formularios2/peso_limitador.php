<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir archivo con límite de peso</title>
</head>
<body>
    <h3>Subir archivo con límite de peso</h3>
    <form action="carga_peso.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="fichero">
        <br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

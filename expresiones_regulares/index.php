<!DOCTYPE html>
<html>
<head>
    <title>Validar Formulario</title>
</head>
<body>
    <h2>Validar Número de Teléfono</h2>
    <form action="procesar_formulario.php" method="POST">
        <label>Número de Teléfono: </label>
        <input type="text" name="telefono" required pattern="[0-9]{3}-[0-9]{7}">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

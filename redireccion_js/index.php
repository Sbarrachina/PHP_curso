<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redireccionar páginas</title>
</head>
<body>
    <h1>Bienvenido a mi sitio web</h1>
    <p>Haga clic en el enlace para redireccionar a otra página:</p>
    <a href="redireccionar.php">Redireccionar a otra página usando PHP</a>
    <br>
    <button onclick="redireccionar()">Redireccionar a otra página usando JavaScript</button>

    <script>
        function redireccionar() {
            // Usamos la función window.location.href para redireccionar a otra página
            window.location.href = "destino.php";
        }
    </script>
</body>
</html>

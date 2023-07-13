<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>

<!-- metodo POST la mas seguro porque no se ven los datos en navegador -->

<form action="./index.php" method="POST">
     <!-- Donde voy a enviar el formulario -->


<div>
<label for="nombre">Nombre</label>
<input type="text" id="nombre" name="nombre">

</div>

<br>

<label for="asignatura">Asignatura</label>
<select id="asignatura" name="asignatura">
    <option value="Ingles">Ingles</option>
    <option value="Matematicas">Matematicas</option>
    <option value="Ciencia">Ciencia</option>
    <option value="Lenguaje">Lenguaje</option>

</select>

<br><br>

<label for="opcion-1">
    <input type="checkbox" value="Manzana" id="opcion-1" name="frutas">
    Manzana

</label>

<br><br><br>

<button type="submit"> Enviar</button>

</form>



<!-- Metodo GET  -->



<form action="./index.php" method="GET">
     <!-- Donde voy a enviar el formulario -->


<div>
<label for="nombre">Nombre</label>
<input type="text" id="nombre" name="nombre">

</div>

<br>

<label for="asignatura">Asignatura</label>
<select id="asignatura" name="asignatura">
    <option value="Ingles">Ingles</option>
    <option value="Matematicas">Matematicas</option>
    <option value="Ciencia">Ciencia</option>
    <option value="Lenguaje">Lenguaje</option>

</select>

<br><br>

<label for="opcion-1">
    <input type="checkbox" value="Manzana" id="opcion-1" name="frutas">
    Manzana

</label>

<br><br><br>

<button type="submit"> Enviar</button>

</form>
</body>
</html>
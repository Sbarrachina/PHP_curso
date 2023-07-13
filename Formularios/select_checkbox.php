<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios select checbox</title>
</head>
<body>

<!-- metodo POST la mas seguro porque no se ven los datos en navegador -->

<form action="./index_checkbox.php" method="POST">
     <!-- Donde voy a enviar el formulario -->


<label for="asignatura">Asignatura</label>

<!-- convertirlo en un select multiple -->
 
<select id="asignatura" name="asignatura[]" multiple>
    <option value="Ingles">Ingles</option>
    <option value="Matematicas">Matematicas</option>
    <option value="Ciencia">Ciencia</option>
    <option value="Lenguaje">Lenguaje</option>

</select>

<br><br>

<label for="opcion-1">
    <input type="checkbox" value="Manzana" id="opcion-1" name="frutas[]">
    Manzana

</label>

<label for="opcion-2">
    <input type="checkbox" value="Fresa" id="opcion-2" name="frutas[]">
    Fresa

</label>

<label for="opcion-3">
    <input type="checkbox" value="Pera" id="opcion-3" name="frutas[]">
    Pera

</label>

<br><br><br>

<button type="submit"> Enviar</button>

</form>




</body>
</html>
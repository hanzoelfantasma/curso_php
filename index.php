<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Formularios</title>
</head>
<body>
    
    <h1>Formulario</h1>
    <form action="subir_archivos.php" method="POST" enctype="multipart/form-data">
        <label for="valor1">Nombre:</label>
        <p><input type="text" name="valor1" autofocus="autofocus" /></p>
        <label for="valor2">Apellido:</label>
        <p><input type="text" name="valor2" /></p>
        <textarea name="valor3"></textarea>
        <p><label for="valores">Valores</label></p>
        <select name="valores">
            <option value="v1">v1</option>
            <option value="v2">v2</option>
            <option value="v3">v3</option>
        </select>
        <p><label for="archivo">Archivo </label>
            <input type="file" name="archivo"/></p>
        <p><input type="submit" /></p>
    </form>
</body>
</html>
<?php


?>


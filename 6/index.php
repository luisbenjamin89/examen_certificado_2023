<?php
/* Dado una página con 5 submit, como se muestra en el ejemplo,
visualiza el submit que he apretado o si no he apretado ninguno indícalo */
//Recibir el nombre del botón
//En función del valor del botón
$opcion = $_POST['submit'] ?? null;
switch ($opcion) {
    case "Ver":
        $msj = "Ha pulsado en el botón 'Ver'.";
        break;
    case "Insertar":
        $msj = "Ha pulsado en el botón 'Insertar'.";
        break;
    case "Borrar":
        $msj = "Ha pulsado en el botón 'Borrar'.";
        break;
    case "Consultar":
        $msj = "Ha pulsado en el botón 'Consultar'.";
        break;
    case "Editar":
        $msj = "Ha pulsado en el botón 'Editar'.";
        break;
    default:
        $msj = "Ha cargado la url";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./../estilo.css">
</head>
<body>
<a style="%;color:darkblue;size:2rem" href="./../index.php">Volver</a>
<h1>
    <?= $msj ?>
</h1>
<form method="post" action="index.php">
    <fieldset>
        <legend>Opciones</legend>
        <input type="submit" value="Ver" name="submit">
        <input type="submit" value="Insertar" name="submit">
        <input type="submit" value="Borrar" name="submit">
        <input type="submit" value="Consultar" name="submit">
        <input type="submit" value="Editar" name="submit">
    </fieldset>
</form>
</body>
</html>
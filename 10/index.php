<?php
// Genera un valor entre 1 y 100, y muestra si es par o si es impar

//Aquí genero el valor
if (isset($_POST['submit'])){
 //Lee el nombre y lleva un contador de clicks
 //   Para ello deberías de tener un array asociativo por nombre
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
<fieldset>
    <legend>Datos de click</legend>
    Nombre <input type="text" name="nombre" id=""><br />
    <input type="submit" value="Haz click" name="submit">


</fieldset>

</body>
</html>


<?php

function password($length)
{
    $key = "";
    $pattern = "1234567890abcdefghijklmnopqrstuvwxyz";
    $max = strlen($pattern)-1;
    for($i = 0; $i < $length; $i++){
        $key .= substr($pattern, rand(0,$max), 1);
    }
    return $key;
}

$msj=password(8)

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="./../estilo.css">
</head>
<body>

<a style="%;color:darkblue;size:2rem" href="./../index.php">Volver</a>

<fieldset style="width:40%;margin: 20%;background: darkkhaki ">
    <legend>Acciones</legend>
<form action="index.php" method="post">
    <input type="submit" value="Genera Password" name="submit">
</form>
<h1><?= $msj?></h1>
</fieldset>
</body>
</html>


<?php
include "funciones.php";
$operacion=$_POST['operador'] ?? "";
$N1=$_POST['op1'] ?? "";
$N2=$_POST['op2'] ?? "";

switch ($operacion)
{
    case "+": $msj =sumar($N1,$N2) ;
    break;

    case "-": $msj =restar($N1,$N2) ;
        break;
    case "*": $msj =multiplicar($N1,$N2) ;
        break;
    case "/": $msj =dividir($N1,$N2) ;
        break;
}



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="./../estilo.css">
</head>
<body>

<a style="%;color:darkblue;size:2rem" href="./../index.php">Volver</a>
<form  action='index.php' method='POST'>
<fieldset>
    <legend>Calculadora</legend>
    <input type="text" name="op1" id="" placeholder="Operador 1">
    <select name="operador" id="">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="op2" id="" placeholder="Operador 2">
    <input type="submit" value="Opearar" value="submit">
</fieldset>
</form>

<h1>
El resultado es : <?=$msj?>
</h1>

</body>
</html>


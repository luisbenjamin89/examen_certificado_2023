
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejrecicio 3</title>
    <link rel="stylesheet" href="./../estilo.css">

</head>
<body>
<a style="%;color:darkblue;size:2rem" href="./../index.php">Volver</a>

<h1>
<!--    Si no te lía mucho, deberías de visualizarlo aquí  -->
    <?php
    $nota=[];
    for($i=0;$i<10;$i++)
    {
        $numeros=rand(1,100);
        $nota[$i]=$numeros;
        $posicion=$i+1;
        echo "Nota $posicion : $nota[$i]<br>";
    }





    ?>
</h1>

</body>
</html>


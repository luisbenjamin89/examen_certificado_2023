<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<fieldset>
    <legend>Listado de ejercicios</legend>
        <?php
        for ($n = 1; $n <= 10; $n++) {
            echo "<a href='$n'>$n º ejercicio del examen</a><br />";
        }
        ?>


</fieldset>


</body>
</html>
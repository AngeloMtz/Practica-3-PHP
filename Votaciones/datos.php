<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votacion</title>
</head>
<body>
    <?php
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];

    if ($edad >=18) {
        echo "<h1>Usted puede votar</h1>";
    } else {
        echo "<h1>Usted no puede votar</h1>";
    }
    ?>
</body>
</html>
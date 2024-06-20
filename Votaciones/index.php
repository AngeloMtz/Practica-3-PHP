<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de Datos</title>
</head>
<body>
    <form action="datos.php" method="POST">
        Nombre: <input type="text" name="nombre" pattern="[A-Z|a-z|ñ|Ñ|á|é|í|ó|ú|Á|É|Í|Ó|Ú|ü|Ü]"><br>
        Edad: <input type="num" name="edad" maxlength="2"><br>
        <input type="submit">
    </form>
</body>
</html>
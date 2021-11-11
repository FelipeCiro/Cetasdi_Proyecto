<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <?php
        require './partials/header.php'
    ?>
        <h1>Ingresar</h1>
        <span>o <a href="./signup.php"a>Registarse</a></span>
    <form action="login.php" method="post">
        <input type="text" name="email" placeholder="Ingresa tú correo">
        <input type="password" name="password" placeholder="Ingresa tú contraseña">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
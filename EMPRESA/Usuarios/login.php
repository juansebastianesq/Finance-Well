<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/login.css" type="text/css">
    <title>Inicio de Sesión</title>
</head>
<body>
    <div class="formulario">
        <h1>Inicio de sesión</h1>

        <form action="../PHP/validacion.php" method="post">
            <div class="LOGIN">
                <label for="username">Usuario:</label>
                <input id="username" name="username" type="text" required>
            </div>
            <div class="LOGIN">
                <label for="password">Contraseña:</label>
                <input id="password" name="password" type="password" required>
            </div>
            <input type="submit" value="Iniciar">
        </form>
        <a class="in" href="../Usuarios/Registro.php">Registro</a>
    </div>
</body>
</html>
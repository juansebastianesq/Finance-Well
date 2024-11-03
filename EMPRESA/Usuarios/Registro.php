<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/registro.css" type="text/css">
    <title>Registro</title>
</head>

<body>
    <div class="formulario">
        <h1>Registro</h1>
        <form name="registroForm" action="../PHP/ingresar.php" method="post">
            <div class="campo">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="campo">
                <label for="apellidoPaterno">Apellido Paterno</label>
                <input type="text" id="apellidoPaterno" name="apellidoPaterno" required>
            </div>
            <div class="campo">
                <label for="apellidoMaterno">Apellido Materno</label>
                <input type="text" id="apellidoMaterno" name="apellidoMaterno" required>
            </div>
            <div class="campo">
                <label for="usuario">Usuario</label>
                <input type="text" id="usuario" name="usuario" required>
            </div>
            <div class="campo">
                <label for="contraseña">Contraseña</label>
                <input type="password" id="contraseña" name="pass" required>
            </div>
            <div class="campo">
                <label for="correo">Correo</label>
                <input type="email" id="correo" name="correo" required>
            </div>
            <div class="campo">
                <label for="ingresos">Ingresos</label>
                <input type="number" id="ingresos" name="ingresos" required>
            </div>
            <div class="campo">
                <label for="edad">Fecha de Nacimiento</label>
                <input type="date" id="edad" name="edad" required>
            </div>
            <div class="botones">
                <input type="reset" value="Borrar" class="boton-borrar">
                <input type="submit" value="Registrarse" class="boton-registrarse" name="val">
            </div>
        </form>
    </div>
</body>

</html>
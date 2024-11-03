<?php
require 'conexion.php';
$Usuario = $_POST['username'];
$contrasena = $_POST['password'];

session_start();

$_SESSION['username'] = $Usuario;

$consulta = "SELECT * FROM usuarios WHERE Usuario ='$Usuario' AND Contraseña = '$contrasena';";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas) {
    // header("location: ../Usuarios/pagprin.php");
    include("../Usuarios/login.php");
    ?>
    <h1 class="Bien">Bienvenido
    <?php
    echo "$Usuario";
    ?>
    </h1>
    <?php
} else {
    include("Error.php");
}
mysqli_free_result($resultado);
mysqli_close($conexion);

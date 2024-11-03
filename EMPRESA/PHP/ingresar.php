<?php
require 'conexion.php';

if (isset($_POST['val'])) {
    $Nombre = $_POST['nombre'];
    $AP = $_POST['apellidoPaterno'];
    $AM = $_POST['apellidoMaterno'];
    $Usuario = $_POST['usuario'];
    $Password = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $Correo = $_POST['correo'];
    $Ingresos = $_POST['ingresos'];
    $FN = $_POST['edad'];

    $ID = "INSERT INTO usuarios VALUES ('', '$Usuario', '$Nombre', '$AP', '$AM', '$FN', '$Ingresos', '$Password', '$Correo')";

    $EI = mysqli_query($conexion,$ID);

    if ($EI) {
        header("location: ../Usuarios/login.php");
    }else{
        echo "Registro Fallado";
    }
}
mysqli_close($conexion);
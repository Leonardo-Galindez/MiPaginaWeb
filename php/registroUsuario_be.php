<?php

include 'conection_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$queryRegistro = "INSERT INTO usuario(nombreCompleto, correoElectronico, usuario, clave) 
                            VALUES('$nombre_completo','$correo','$usuario','$clave')";
/*Verificar Datos*/

$verificarCorreo = mysqli_query($conexion, "SELECT * FROM usuario WHERE correoElectronico ='$correo'");


if (mysqli_num_rows($verificarCorreo) > 0) {
    echo '
    <script>
        alert("Correo ya registrado");
        window.location = "../index.php"
    </script>
    ';
    exit();
}

$verificarUsuario = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario='$usuario'");

if (mysqli_num_rows($verificarUsuario) > 0) {
    echo '
    <script>
        alert("Usuario ya registrado");
        window.location = "../index.php"
    </script>
    ';
    exit();
}

$ejecutarRegistro = mysqli_query($conexion, $queryRegistro);

if ($ejecutarRegistro) {
    echo '
            <script>
                alert("Usuario Registrado");
                window.location = "../index.php"
            </script>
        ';
} else {
    echo '
            <script>
                alert("Error");
                window.location = "../index.php"
            </script>
        ';
}

mysqli_close($conexion);
?>
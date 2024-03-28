<?php

session_start();

include 'conection_be.php';

$correo = $_POST['correo'];
$clave = $_POST['clave'];
$clave = hash('sha512',$clave); //Incriptamos la clave

$queryLogin = mysqli_query($conexion, "SELECT * FROM usuario WHERE (correoElectronico = '$correo' AND clave = '$clave')");

if (mysqli_num_rows($queryLogin) === 1) {
    $_SESSION['usuario'] = $correo;
    header("location: ../home.php");
    exit();
} else {
    echo '
        <script>
            alert("Usuario no registrado");
            window.location = "../index.php";
        </script>
    ';
    exit();
}
?>
<?php

include 'conection_be.php';



$correo = $_POST['correo'];
$clave = $_POST['clave'];

$queryLogin = mysqli_query($conexion, "SELECT * FROM usuario WHERE (correoElectronico = '$correo' AND clave = '$clave')");

if (mysqli_num_rows($queryLogin) === 1) {
    echo '
        <script>
            alert("Inicio con exito");
            window.location = "../home.php";
        </script>
    ';
} else {
    echo '
        <script>
            alert("Usuario no registrado");
            window.location = "../index.php";
        </script>
    ';
}
?>
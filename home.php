<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    echo '
            <script>
                alert("Debe iniciar sesión");
                window.location ="index.php"
            </script> 
        ';
    //header("location:index.php");
    session_destroy();
    die();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Computex</title>
    <link rel="icon" href="assets/images/favicon.ico">
    <link rel="stylesheet" href="assets/css/home.css" />

</head>

<body>
    <header class="header">
        <nav class="nav">
            <a href="#" class="logo nav-link"><img src="assets/images/logo6.png" alt=""></a>
            <button class="nav-toggle" aria-label="Abrir menú">
                <img src="assets/images/bars2.png" alt="">
            </button>
            <ul class="nav-menu">
                <li class="nav-menu-item">
                    <a href="#" class="nav-menu-link nav-link">Productos</a>
                </li>
                <li class="nav-menu-item">
                    <a href="#" class="nav-menu-link nav-link">Arma Tu PC</a>
                </li>
                <li class="nav-menu-item">
                    <a href="#" class="nav-menu-link nav-link">Sobre Mí</a>
                </li>
                <li class="nav-menu-item">
                    <a href="#" class="nav-menu-link nav-link">Contacto</a>
                </li>
                <li class="nav-menu-item-out">
                    <a href="php/logOutUsuario_be.php" class="nav-menu-link-out">Cerrar Sesión</a>
                </li>
            </ul>
        </nav>

    </header>





    <script src="assets/js/home.js"></script>
</body>

</html>
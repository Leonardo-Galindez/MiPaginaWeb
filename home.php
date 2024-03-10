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
    <link rel="stylesheet" href="http://computex.com/assets/css/home.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

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

    <main>
        <div class="contenedor_galeria">
            <div class="slider">
                <input type="radio" name="slider" id="slideOne" checked>
                <input type="radio" name="slider" id="slideTwo" checked>
                <input type="radio" name="slider" id="slideThree" checked>

                <div class="buttons">
                    <label for="slideOne"></label>
                    <label for="slideTwo"></label>
                    <label for="slideThree"></label>
                </div>

                <div class="content">
                    <div class="firtslide"></div>
                    <div class="secondslide"></div>
                    <div class="thirdslide"></div>
                </div>
            </div>
        </div>
    </main>



    <script src="assets/js/home.js"></script>
</body>

</html>
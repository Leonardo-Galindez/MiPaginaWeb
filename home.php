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
            <button id="nav-toggle" class="nav-toggle" aria-label="Abrir menú">
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

    <section class="section-slider">

        <div class="slider">
            <div class="slides">

                <input type="radio" name="radio-btn" id="radio1" checked>
                <input type="radio" name="radio-btn" id="radio2" checked>
                <input type="radio" name="radio-btn" id="radio3" checked>

                <div class="slide firts">
                    <img src="assets/images/bg1.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="assets/images/bg2.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="assets/images/bg3.jpg" alt="">
                </div>

                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                </div>

                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        var counter = 1;
        setInterval(function(){
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if(counter > 3){
                counter = 1;
            }
        }, 5000);
    </script>

    <script src="assets/js/home.js"></script>
</body>
</html>
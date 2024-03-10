
<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        header("location:home.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computex</title>
    <link rel="icon" href="assets/images/favicon.ico">
    <link rel="stylesheet" href="http://computex.com/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <main>
        <div class="contenedor_todo">
            <div class="caja_trasera">
                <div class="caja_trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesion para entrar en la pagina</p>
                    <button id="btn_iniciar-sesion">Iniciar Sesion</button>
                </div>
                <div class="caja_trasera-register">
                    <h3>¿Aun no tienes cuenta?</h3>
                    <p>Registrate para que puedeas iniciar sesion</p>
                    <button id="btn_registrarse">Registrarse</button>
                </div>
            </div>

            <!--Formulario de login y Registro-->

            <div class="contenedor_login-register">
                <!--Login-->
                <form action="php/loginUsuario_be.php" method="POST" class="formulario_login">
                    <h2>Iniciar Sesion</h2>
                    <input type="email" placeholder="Corre Electronico" name="correo">
                    <input type="password" placeholder="Contrseña" name="clave">
                    <button>Iniciar Sesion</button>
                </form>
                <!--Registro-->
                <form action="php/registroUsuario_be.php" method="POST" class="formulario_register">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="email" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="clave">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="assets/js/script.js"></script>
</body>

</html>
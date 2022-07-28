<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Funacion para que la pagina funcione para celulares-->
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="Assets/Css/Style.css">
</head>

<body class="bodylog">
    <div class="Login-body">
        <div class="login-box">
            <img src="Assets/Img/Log-img.png" class="avatar" alt="Avatar Image">
            <h1>Iniciar Sesión</h1>
            <!-- Formulario-->
            <form action="Controller/ValidarLogin.php" method="POST">
                <!-- Casilla Usuario -->
                <label>Correo</label>
                <input type="email" placeholder="Ingresar el Correo" name="correoUsuario" id="correoUsuario" required>
                <!-- Casilla Password -->
                <label>Contraseña</label>
                <input type="password" placeholder="Ingresar Contraseña" name="passwordUsuario" id="passwordUsuario" required>
                <!-- Boton Enviar -->
                <input type="submit" value="Iniciar Sesión" name="ValidarSesion">
                <div class="volver">
                    <a href="?c=Index&a=Index">Volver a la página principal</a>
                </div>

            </form>
        </div>
    </div>
</body>

</html>
<?php
session_start();
include_once("Controller/BDnor.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dash Board</title>
    <link rel="stylesheet" href="Assets/Css/Style.css">
</head>

<body>
    <!-- Nav -->

    <?php include "View/Includes/Nav.php"; ?>

    <h1 class="titulo_nombre">Bienvenido <?php echo ucwords($_SESSION['nombreUsuario']); ?> <?php echo ucwords($_SESSION['apellidoUsuario']); ?></h1>
    <p class="Parrafo"><?php echo "El dia de hoy es " . date("d/m/Y") . "<br>" .  date("h:i:s a") . "<br>"; ?></p>
    <p class="Parrafo">Gracias por estar en la página del mejor consultorio OdontoCentri ofrece lo mejor para tu dentadura, aquí podrás ver tus citas, mirar las novedades que te ofreceremos.</p>

        </div>
    <div>
        <p class="Parrafo">Este página tiene una manera muy efectiva de poder generar código ya que con todas la variables que tiene se dan los valores</p>
    </div>



</body>

</html>
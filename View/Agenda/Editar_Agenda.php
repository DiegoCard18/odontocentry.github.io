<?php
session_start();
include_once("Controller/BDnor.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Assets/Css/Style.css">
</head>

<body>
    <div class="modal-content">
        <h1><?php echo $datos["titulo"]; ?></h1>
        <br>
        <div class="Form-us">
            <nav class="container">
                <form action="?c=Agenda&a=Actualizar" method="POST" id="form">
                    <div c.lass="nav-s1">
                        <h1>Agenda</h1>
                        <br>
                        <!--Id -->
                        <input type="text" id="idAgenda" name="idUsuario" value="<?php echo $datos["idAgenda"] ?>">

                        <div class="form-40le">
                            <label for="fechaAgenda">Fecha Agenda</label>
                            <input type="date" name="fechaAgenda" value="<?php echo $datos["agenda"]['fechaAgenda']; ?>" required>
                        </div>
                        <div class="form-40ri">
                            <label for="horaAgenda">Hora Agenda</label>
                            <input type="time" name="horaAgenda" value="<?php echo $datos["agenda"]['horaAgenda']; ?>" required>
                        </div>

                        <div class="form-40le">
                            <label for="Consultorio">Consultorio</label>
                            <input type="text" name="Consultorio" value="<?php echo $datos["agenda"]['Consultorio']; ?>" placeholder="Consultorio" required>
                        </div>
                        <div class="form-40ri">
                            <label for="estadoAgenda">Estado Agenda</label>
                            <select name="estadoAgenda" id="estadoAgenda" value="<?php echo $datos["agenda"]['estadoAgenda']; ?>">
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
                        </div>


                        <br>
                        <br>
                        <input type="submit" name="save_enviar_05" value="Registrar">

                    </div>
                </form>
            </nav>
        </div>
    </div>
    <!--Fin Formulario-->
    </div>

</body>

</html>
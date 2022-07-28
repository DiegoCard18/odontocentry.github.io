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
        <form action="?c=Consulta&a=Guardar" method="POST" id="form">
            <div c.lass="nav-s1">
                <h1>Diligencie los datos de la consulta Médica</h1>
                <br>
                <div class="form-40le">
                    <label for="horaAtencion">Hora Atencion</label>
                    <input type="time" name="horaAtencion" placeholder="Hora Atencion" required>
                </div>
                <div class="form-40ri">
                    <label for="motivoConsulta">Motivo de Consulta</label>
                    <textarea name="motivoConsulta" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="form-40le">
                    <label for="Enfermedad">Enfermedad</label>
                    <textarea name="Enfermedad" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="form-40ri">
                    <label for="idHistoriaFk">Id Historia</label>
                    <input type="text" name="idHistoriaFk" placeholder="Paciente" maxlength="50">
                </div>
                <br>
                <br>
                <input type="submit" name="save_enviar_04" value="Registrar">
            </div>
        </form>

    </div>
    <!--Fin Formulario-->
    </div>

</body>

</html>
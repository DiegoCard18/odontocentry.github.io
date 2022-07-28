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
        <h1><?php echo $data["titulo"]; ?></h1>
        <br>
        <div class="Form-us">
            <nav class="container">
                <form action="?c=Agenda&a=Guardar" method="POST" id="form">
                    <div c.lass="nav-s1">
                        <h1>Agenda</h1>
                        <br>

                        <div class="form-40le">
                            <label for="fechaAgenda">Fecha Agenda</label>
                            <input type="date" name="fechaAgenda" required>
                        </div>
                        <div class="form-40ri">
                            <label for="horaAgenda">Hora Agenda</label>
                            <input type="time" name="horaAgenda" required>
                        </div>

                        <div class="form-40le">
                            <label for="Consultorio">Consultorio</label>
                            <input type="text" name="Consultorio" placeholder="Consultorio" required>
                        </div>
                        <div class="form-40ri">
                            <label for="estadoAgenda">Estado Agenda</label>
                            <select name="estadoAgenda" id="estadoAgenda">
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
                        </div>

                        <div class="form-40le">
                            <label for="idPacienteFk">Id de paciente</label>
                            <input type="text" name="idPacienteFk" placeholder="Numero de identificacion del Paciente" maxlength="12" required>
                        </div>
                        <div class="form-40ri">
                            <label for="idMedicoFk">Id de Medico</label>
                            <input type="text" name="idMedicoFk" placeholder="Id del Medico" maxlength="12" required>
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
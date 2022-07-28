<?php
session_start();
include_once("Controller/BDnor.php")
?>
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
        <form action="?c=Paciente&a=Actualizar" method="POST" id="form">
            <div c.lass="nav-s1">
                <h1>Diligencie los datos básicos del paciente</h1>
                <br><br>

                <input type="text" name="id" value="<?php echo $datos["id"] ?>">
                <div class="form-40le">
                    <label for="correoPaciente">Correo electronico del paciente</label>
                    <input type="email" name="correoPaciente" value="<?php echo $datos["Paciente"]['correoPaciente'] ?>" placeholder="Correo" maxlength="50" pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}" title="Debe de ingresar un correo electronico correspondiente (Ejemplo@Ejemplo.com)" required>
                </div>
                <div class="form-40ri">
                    <label for="nombrePaciente">Nombre Paciente</label>
                    <input type="text" name="nombrePaciente" value="<?php echo $datos["Paciente"]['nombrePaciente'] ?>" placeholder="Nombre" maxlength="50" pattern="[A-Za-z]{4-30}" title="Debe de ingresar un nombre correspondiente" required>
                </div>
                <div class="form-40le">
                    <label for="apellidoPaciente">Apellido Paciente</label>
                    <input type="text" name="apellidoPaciente" value="<?php echo $datos["Paciente"]['apellidoPaciente'] ?>" placeholder="Apellido" maxlength="50" pattern="[A-Za-z]{4-30}" title="Debe de ingresar un apellido correspondiente" required>
                </div>
                <div class="form-40ri">
                    <label for="direccionPaciente">Dirección Paciente</label>
                    <input type="text" name="direccionPaciente" value="<?php echo $datos["Paciente"]['direccionPaciente'] ?>" placeholder="Dirección" maxlength="50">
                </div>
                <div class="form-40le">
                    <label for="telefonoPaciente">Telefono Paciente</label>
                    <input type="text" name="telefonoPaciente" value="<?php echo $datos["Paciente"]['telefonoPaciente'] ?>" placeholder="Telefono" maxlength="20" pattern="[0-9]{6,10}" title="Debe de ingresar un numero telefonico real" required>
                </div>
                <div class="form-40ri">
                    <label form="fechaNacimiento">Fecha de Nacimiento</label>
                    <input type="date" name="fechaNacimiento" value="<?php echo $datos["Paciente"]['fechaNacimiento'] ?>" placeholder="Telefono" maxlength="20">
                </div>
                <div class="form-40le">
                    <label for="estadoPaciente">Estado Del Paciente</label>
                    <select name="estadoPaciente" id="estadoPaciente" value="<?php echo $datos["Paciente"]['estadoPaciente'] ?>">
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>
                </div>
                <br>
                <br>
                <input type="submit" name="save_enviar_01" value="Registrar">

            </div>
        </form>
    </div>
    <!--Fin Formulario-->
    </div>

</body>

</html>
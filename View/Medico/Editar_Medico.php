<?php
session_start();
include 'Controller/ValidarLogin.php';
ini_set('error_reporting', 0);

if (!isset($_SESSION['correoUsuario'])) {
    header("Location: Index.php?c=Login&a=Index");
}
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
        <form action="?c=Medico&a=Actualizar" method="POST" id="form">
            <div c.lass="nav-s1">
                <h1>Diligencie los datos basicos del Medico</h1>
                <br>
                <input type="hidden" name="id" value="<?php echo $datos["id"] ?>">
                <div class="form-40le">
                    <label for="NombreUsuario">Nombre Medico</label>
                    <input type="text" name="nombreMedico" placeholder="Nombre" value="<?php echo $datos["medico"]['nombreMedico'] ?>" maxlength="50" pattern="[A-Za-z]{4-30}" title="Debe de ingresar un nombre correspondiente" required>
                </div>
                <div class="form-40ri">
                    <label for="ApellidoUsuario">Apellido Medico</label>
                    <input type="text" name="apellidoMedico" placeholder="Apellido" value="<?php echo $datos["medico"]['apellidoMedico'] ?>" maxlength="50" pattern="[A-Za-z]{4-30}" title="Debe de ingresar un apellido correspondiente" required>
                </div>
                <div class="form-40le">
                    <label for="telefonoUsuario">Telefono Medico</label>
                    <input type="text" name="telefonoMedico" placeholder="Telefono" value="<?php echo $datos["medico"]['telefonoMedico'] ?>" maxlength="20" pattern="[0-9]{6,10}" title="Debe de ingresar un numero telefonico real" required>
                </div>
                <div class="form-40ri">
                    <label for="correoMedico">Correo electronico del Medico</label>
                    <input type="text" name="correoMedico" placeholder="Correo del Medico" value="<?php echo $datos["medico"]['correoMedico'] ?>" maxlength="50" pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}" title="Debe de ingresar un correo electronico correspondiente (Ejemplo@Ejemplo.com)" required>
                </div>
                <div class="form-40le">
                    <label for="direccionUsuario">Targeta de Profesion Medico</label>
                    <input type="text" name="tarjetaProfesional" placeholder="Targeta de profesion " value="<?php echo $datos["medico"]['tarjetaProfesional'] ?>" maxlength="50" pattern="[0-9]{4-30}" title="Debe de ingresar una targeta de Profesion Existente" required>
                </div>
                <div class="form-40ri">
                    <label for="direccionUsuario">Especialidad Del Medico</label>
                    <input type="text" name="especialidadMedico" placeholder="Especialidad Medico" value="<?php echo $datos["medico"]['especialidadMedico'] ?>" maxlength="50" required>
                </div>
                <div class="form-40le">
                    <label for="estadoMedico">Estado Del Medico</label require>
                    <select name="estadoMedico" id="estadoMedico" value="<?php echo $datos["medico"]['estadoMedico'] ?>">
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>
                </div>
                <br>
                <br>
                <input type="submit" name="save_enviar_01" value="Actualizar Médico">

            </div>
        </form>

    </div>
    <!--Fin Formulario-->
    </div>

</body>

</html>
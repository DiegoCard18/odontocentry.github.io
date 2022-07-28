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
        <form action="?c=Usuario&a=Actualizar" method="POST" id="form" autocomplete="on">
            <div c.lass="nav-s1">
                <h1>Diligencie los datos basicos del usuario</h1>
                <br><br>
                <!--Id usuario-->
                    <input type="hidden" id="idUsuario" name="idUsuario" value="<?php echo $datos["idUsuario"] ?>">
                <!--Nombre usuario-->
                <div class="form-40le">
                    <label for="nombreUsuario">Nombre</label>
                    <input type="text" name="nombreUsuario" value="<?php echo $datos["usuario"]["nombreUsuario"] ?>" placeholder="Nombre" maxlength="50" pattern="[A-Za-z]{4-30}" title="Debe de ingresar un nombre correspondiente" required>
                </div>
                <!--Apellido usuario-->
                <div class="form-40ri">
                    <label for="apellidoUsuario">Apellido</label>
                    <input type="text" name="apellidoUsuario" value="<?php echo $datos["usuario"]["apellidoUsuario"] ?>" placeholder="Apellido" maxlength="50" pattern="[A-Za-z]{4-30}" title="Debe de ingresar un apellido correspondiente" required>
                </div>
                <!--Correo usuario-->
                <div class="form-40le">
                    <label for="correoUsuario">Correo Electronico</label>
                    <input type="email" name="correoUsuario" value="<?php echo $datos["usuario"]["correoUsuario"] ?>" placeholder="Correo" maxlength="50" required>
                </div>
                <!--Telefono usuario-->
                <div class="form-40ri">
                    <label for="telefonoUsuario">Telefono</label>
                    <input type="text" name="telefonoUsuario" value="<?php echo $datos["usuario"]["telefonoUsuario"] ?>" placeholder="Telefono" maxlength="20" pattern="[0-9]{6,10}" title="Debe de ingresar un numero telefonico real" required>
                </div>
                <!--Direccion usuario-->
                <div class="form-40le">
                    <label for="direccionUsuario">Dirección</label>
                    <input type="text" name="direccionUsuario" value="<?php echo $datos["usuario"]["direccionUsuario"] ?>" placeholder="Dirección" maxlength="50">
                </div>
                <!--Contraseña usuario-->
                <div class="form-40ri">
                    <label for="passwordUsuario">Contraseña</label>
                    <input type="text" name="passwordUsuario" value="<?php echo $datos["usuario"]["passwordUsuario"] ?>" placeholder="Contraseña"  maxlength="20" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un número y una letra mayúscula y minúscula, y al menos 8 caracteres o más" required>
                </div>
                <!--Rol usuario-->
                <div class="form-40le">
                    <label for="rolUsuario">Rol Usuario</label>
                    <select name="rolUsuario" id="rolUsuario" value="<?php echo $datos["usuario"]["rolUsuario"] ?>">
                        <option value="1">Secretario(a)</option>
                        <option value="2">Medico(a)</option>
                        <option value="3">Paciente</option>
                    </select>
                </div>
                <!--Estado usuario-->
                <div class="form-40ri">
                    <label for="estadoUsuario">Estado</label>
                    <select name="estadoUsuario" id="estadoUsuario" value="<?php echo $datos["usuario"]["nombreUsuario"] ?>">
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>
                </div>
                <br><br>
                <input type="submit" name="save_enviar" value="Registrar">
                <!--Se envian los datos a un PHP Controlador que valida los datos-->
            </div>
        </form>
    </div>
    <!--Fin Formulario-->
    </div>

</body>

</html>
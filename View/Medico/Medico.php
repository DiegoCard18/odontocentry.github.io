<?php
session_start();
include 'Controller/ValidarLogin.php';
ini_set('error_reporting', 0);

if (!isset($_SESSION['correoUsuario'])) {
    header("Location: Index.php?c=Login&a=Index");
}
?>
<?php
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $datos["titulo"]; ?></title>
    <link rel="stylesheet" href="Assets/Css/Style.css">
</head>

<body>

    <!-- Nav -->

    <?php include "View/Includes/Nav.php"; ?>

    <!-- Titulo -->

    <div class="container">
        <h1><?php echo $datos["titulo"]; ?></h1>


        <a class="btn btn-succes" href="?c=Medico&a=Nuevo">Agregar</a>
        <br><br><br>
        <div class="col-md-8">
            <br />
            <br />
            <div class="table-responsive">
                <!-- Tabla -->
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th> Nombre </th>
                            <th> Apellido </th>
                            <th> Telefono</th>
                            <th> Correo</th>
                            <th> Targeta Profesional</th>
                            <th> Especialidad Medico </th>
                            <th> Estado Medico</th>
                            <th> Editar</th>
                            <th> Inhabilitar </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($datos["medico"] as $datos) {
                            echo "<tr>";
                            echo "<td>" . $datos["nombreMedico"] . "</td>";
                            echo "<td>" . $datos["apellidoMedico"] . "</td>";
                            echo "<td>" . $datos["telefonoMedico"] . "</td>";
                            echo "<td>" . $datos["correoMedico"] . "</td>";
                            echo "<td>" . $datos["tarjetaProfesional"] . "</td>";
                            echo "<td>" . $datos["especialidadMedico"] . "</td>";
                            echo "<td>" . $datos["estadoMedico"] . "</td>";

                            echo "<td><a href='?c=Medico&a=Modificar&id=" . $datos["idMedico"] . "' class='btn btn-warning'>Modificar</a></td>";

                            echo "<td><a href='?c=Medico&a=Inhabilitar&id=" . $datos["idMedico"] . "' class='btn btn-warning'>Inhabilitar</a></td>";
                        ?>
                        <?php } ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

</body>

</html>
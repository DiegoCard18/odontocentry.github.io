<?php
session_start();
include_once("Controller/BDnor.php")
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


        <a class="btn btn-succes" href="?c=Consulta&a=Nuevo">Agregar</a>
        <br><br><br>
        <div class="col-md-8">
            <br />
            <br />
            <div class="table-responsive">
                <!-- Tabla -->
                <table class="table table-bordered">
                    <thead>
                        <tr class=" table-primary">
                            <th> ID consulta </th>
                            <th> horaAtencion </th>
                            <th> motivoConsulta </th>
                            <th> Enfermedad </th>
                            <th> Editar Consulta médica </th>
                            <!--<th> Eliminar </th>-->
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($datos["consulta"] as $datos) {
                            echo "<tr>";
                            echo "<td>" . $datos["idConsulta"] . "</td>";
                            echo "<td>" . $datos["horaAtencion"] . "</td>";
                            echo "<td>" . $datos["motivoConsulta"] . "</td>";
                            echo "<td>" . $datos["Enfermedad"] . "</td>";

                            echo "<td><a href='?c=Consulta&a=Modificar&id=" . $datos["idConsulta"] . "' class='btn btn-warning'>Modificar</a></td>";

                            //cho "<td><a href='?c=Consulta&a=Eliminar&idUsuario=" . $datos["idConsulta"] . "' class='btn btn-warning'>Eliminar</a></td>";

                        ?>
                        <?php } ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

</body>

</html>
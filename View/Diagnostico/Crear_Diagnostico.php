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
        <form action="?c=Diagnostico&a=Nuevo" method="POST" id="form">
            <div c.lass="nav-s1">
                <h1>Diligencie el Diagnóstico Paciente</h1>
                <br>
                <div>
                    <input type="hidden" name="idDiagnostico">
                </div>
                <div class="form-40le">
                    <label for="Peso">Descripción</label>
                    <textarea name="Descripcion" placeholder="Descripcion" id="Descripcion" cols="30" rows="10"></textarea>
                </div>
                <div class="form-40ri">
                    <label for="idConsultaFk">Id Consulta</label>
                    <input type="text" name="idConsultaFk" placeholder="Id Consulta" maxlength="50">
                </div>
                <br>
                <br>
                <input type="submit" name="save_enviar" value="Registrar">
            </div>
        </form>
    </div>
    <!--Fin Formulario-->
    </div>

</body>

</html>
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
        <form action="?c=Historia&a=Guardar" method="POST" id="form">
                <div c.lass="nav-s1">
                    <h1>Diligencie el historial clínico del paciente</h1>
                    <br>
                    
                    <div class="form-40le">
                        <label for="Estatura">Estatura</label>
                        <input type="text" name="Estatura" placeholder="Estatura" required>
                    </div>

                    <div class="form-40ri">
                        <label for="Peso">Peso</label>
                        <input type="text" name="Peso" placeholder="Peso" required>
                    </div>
                    <div class="form-40le">
                        <label for="antecedentesFamiliares">Antecedentes de los familiares del Paciente</label>
                        <textarea name="antecedentesFamiliares" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-40ri">
                        <label for="enfermedadesPadecidas">Enfermedades Padecidas</label>
                        <textarea name="enfermedadesPadecidas" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-40le">
                        <label for="Alergias">Alergias</label>
                        <input type="text" name="Alergias" placeholder="Alergias">
                    </div>
                    <div class="form-40ri">
                        <label for="idPacienteFk">Id del Paciente</label>
                        <input type="text" name="idPacienteFk" placeholder="Id Paciente" required>
                    </div>
                    <br>
                    <br>
                    <input type="submit" name="save_enviar_03" value="Registrar">
                </div>
            </form>

    </div>
    <!--Fin Formulario-->
    </div>

</body>

</html>
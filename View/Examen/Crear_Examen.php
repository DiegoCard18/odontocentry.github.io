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
            <form action="?c=Examen&a=Guardar" method="POST" id="form">
                <div c.lass="nav-s1">
                    <h1>Diligencie el examen</h1>
                    <br>
                    <div>
                    </div>
                    <div class="form-40le">
                        <label for="Valor">Valor</label>
                        <input type="text" name="Valor" placeholder="Valor del examen" required>
                    </div>
                    <div class="form-40ri">
                        <label for="fechaExamen">Fecha del examen</label>
                        <input type="date" name="fechaExamen" required>
                    </div>
                    <div class="form-40le">
                        <label for="idHistoriaFk">Id HistoriaFk</label>
                        <input type="text" name="idHistoriaFk" placeholder="Id Historia" maxlength="50" required>
                    </div>
                    <br>
                    <br>
                    <input type="submit" name="save_enviar_06" value="Registrar">
                </div>
            </form>
        </nav>
    </div>
    </div>
    <!--Fin Formulario-->
    </div>

</body>

</html>
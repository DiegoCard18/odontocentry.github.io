<?php

$host = "localhost";//Servidor
$dbuser = "root";//Usuario de la base de datos
$dbpwd = "";//Contraseña de la base de datos
$db = "consultorio";//Nombre de la base de datos 

$conn = mysqli_connect($host, $dbuser, $dbpwd);//Se hace la conexion ala base de datos
if (!$conn)
    echo ("No se ha conectado a la base de datos");//Sin los datos no son correctos, arrroja un error 
else {
    $select = mysqli_select_db($conn, $db);//Seleciona la base de datos
}   


//include_once('Controller/DBnor.php');


if (isset($_POST['ValidarSesion'])) {


    $correoUsuario = $_POST['correoUsuario'];

    $passwordUsuario = $_POST['passwordUsuario'];

    $query = "SELECT * FROM usuario WHERE correoUsuario='$correoUsuario' and passwordUsuario='$passwordUsuario'";

    $consulta = mysqli_query($conn, $query);

    $contar = mysqli_num_rows($consulta);

    if ($contar == 1) {

        while ($row = mysqli_fetch_array($consulta)) {

            if ($correoUsuario = $row['correoUsuario'] && $passwordUsuario = $row['passwordUsuario']) {

                session_start();

                $_SESSION['idUsuario'] = $row['idUsuario'];
                $_SESSION['nombreUsuario'] = $row['nombreUsuario'];
                $_SESSION['apellidoUsuario'] = $row['apellidoUsuario'];
                $_SESSION['correoUsuario'] = $row['correoUsuario'];
                $_SESSION['telefonoUsuario'] = $row['telefonoUsuario'];
                $_SESSION['direccionUsuario'] = $row['direccionUsuario'];
                $_SESSION['passwordUsuario'] = $row['passwordUsuario'];
                $_SESSION['rolUsuario'] = $row['rolUsuario'];

                //echo "Datos bien ";

                header('Location: ../Index.php?c=Dashboard&a=Index');
            }
        }
    } else {

        echo "Datos incorrectos";
    }
}

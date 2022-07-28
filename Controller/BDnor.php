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
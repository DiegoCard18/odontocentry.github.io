<?php

class ModelUsuario {

    private $db;

    private $usuario;

    public function __construct(){
        
        $this->db = Database::conexion();

        $this->usuario = array();
    }

    public function ver_usuarios(){

        $sql = "SELECT * FROM usuario";

        $valor = $this->db->query($sql);

        while($row = $valor->fetch_assoc()){
            $this->usuario[] = $row;
        }
        return $this->usuario;

    }

    public function Insertar($id, $nombreUsuario, $apellidoUsuario, $correoUsuario, $telefonoUsuario, $direccionUsuario, $passwordUsuario, $rolUsuario, $estadoUsuario){

        /*$verificorreo = "SELECT * FROM usuario WHERE correoUsuario = '$correoUsuario'";

        if($verificorreo >= 1){
            
        }*/

        $slq = "INSERT INTO usuario(idUsuario, nombreUsuario, apellidoUsuario, correoUsuario, telefonoUsuario, direccionUsuario, passwordUsuario, rolUsuario, estadoUsuario) VALUES('$id', '$nombreUsuario', '$apellidoUsuario', '$correoUsuario', '$telefonoUsuario', '$direccionUsuario', '$passwordUsuario', '$rolUsuario', '$estadoUsuario')";
			
        $reslut = $this->db->query($slq);

    }



    public function Modificar($id, $nombreUsuario, $apellidoUsuario, $correoUsuario, $telefonoUsuario, $direccionUsuario, $passwordUsuario, $rolUsuario, $estadoUsuario){

        $sql = "UPDATE usuario SET nombreUsuario = '$nombreUsuario', apellidoUsuario= '$apellidoUsuario', correoUsuario = '$correoUsuario', telefonoUsuario = '$telefonoUsuario', direccionUsuario = '$direccionUsuario', passwordUsuario = '$passwordUsuario', rolUsuario = '$rolUsuario' WHERE idUsuario = '$id' ";
			
        $resultado = $this->db->query($sql);	

    }

    public function Get_Usuario($id)
    {
        $sql = "SELECT * FROM usuario WHERE idUsuario='$id' LIMIT 1";

        $resultado = $this->db->query($sql);

        $row = $resultado->fetch_assoc();

        return $row;
    }

    public function InhabilitarUsuario($id){

        $sql = "UPDATE usuario SET estadoUsuario = 0 WHERE idUsuario = '$id'";

        $resultado = $this->db->query($sql);
    }


}

?>
<?php

class ModelConsulta {

    private $db;

    private $consulta;

    public function __construct(){
        
        $this->db = Database::conexion();

        $this->consulta = array();
    }

    public function ver_consulta(){

        $sql = "SELECT * FROM consulta_medica";

        $valor = $this->db->query($sql);

        while($row = $valor->fetch_assoc()){
            $this->consulta[] = $row;
        }
        return $this->consulta;

    }

    public function Insertar($horaAtencion, $motivoConsulta, $Enfermedad, $idHistoriaFk){

        $sql = "INSERT INTO consulta_medica(horaAtencion, motivoConsulta, Enfermedad, idHistoriaFk) VALUES('$horaAtencion', '$motivoConsulta', '$Enfermedad', '$idHistoriaFk')";
			
        $reslut = $this->db->query($sql);

    }



    public function Modificar($id, $horaAtencion, $motivoConsulta, $Enfermedad){

        $sql = "UPDATE consulta_medica SET horaAtencion = '$horaAtencion', motivoConsulta= '$motivoConsulta', Enfermedad = '$Enfermedad' WHERE idConsulta = '$id' ";
			
        $resultado = $this->db->query($sql);	

    }

    public function Get_Consulta($id)
    {
        $sql = "SELECT * FROM consulta_medica WHERE idConsulta='$id' LIMIT 1";

        $resultado = $this->db->query($sql);

        $row = $resultado->fetch_assoc();

        return $row;
    }

    /*

    public function InhabilitarUsuario($id){

        $sql = "UPDATE usuario SET estadoUsuario = 0 WHERE idUsuario = '$id'";

        $resultado = $this->db->query($sql);
    }

    */


}

?>
<?php

class ModelPaciente {

    private $db;

    private $paciente;

    public function __construct(){
        
        $this->db = Database::conexion();

        $this->paciente = array();
    }

    public function ver_paciente(){

        $sql = "SELECT * FROM paciente";

        $valor = $this->db->query($sql);

        while($row = $valor->fetch_assoc()){
            $this->paciente[] = $row;
        }
        return $this->paciente;

    }

    public function Insertar($nombrePaciente, $apellidoPaciente, $direccionPaciente, $telefonoPaciente, $correoPaciente, $fechaNacimiento, $estadoPaciente, $idUsuarioFK){

        $slq = "INSERT INTO paciente(nombrePaciente, apellidoPaciente, direccionPaciente, telefonoPaciente, correoPaciente, fechaNacimiento, estadoPaciente, idUsuarioFK) 
    VALUES('$nombrePaciente', '$apellidoPaciente', '$direccionPaciente', '$telefonoPaciente', '$correoPaciente', '$fechaNacimiento', '$estadoPaciente', '$idUsuarioFK')";
			
        $reslut = $this->db->query($slq);

    }



    public function Modificar($id, $nombrePaciente, $apellidoPaciente, $direccionPaciente, $telefonoPaciente, $correoPaciente, $fechaNacimiento, $estadoPaciente){

        $sql = "UPDATE paciente SET nombrePaciente = '$nombrePaciente', apellidoPaciente= '$apellidoPaciente', direccionPaciente = '$direccionPaciente', telefonoPaciente = '$telefonoPaciente', correoPaciente = '$correoPaciente', fechaNacimiento = '$fechaNacimiento', estadoPaciente = '$estadoPaciente' WHERE idPaciente = '$id' ";
        $resultado = $this->db->query($sql);	

    }

    public function Get_Paciente($id)
    {
        $sql = "SELECT * FROM paciente WHERE idPaciente='$id' LIMIT 1";

        $resultado = $this->db->query($sql);

        $row = $resultado->fetch_assoc();

        return $row;
    }

    public function InhabilitarPaciente($id){

        $sql = "UPDATE paciente SET estadoPaciente = 0 WHERE idPaciente = '$id'";

        $resultado = $this->db->query($sql);
    }

}

?>
<?php

class ModelMedico {

    private $db;

    private $medico;

    public function __construct(){
        
        $this->db = Database::conexion();

        $this->medico = array();
    }

    public function ver_medico(){

        $sql = "SELECT * FROM medico";

        $valor = $this->db->query($sql);

        while($row = $valor->fetch_assoc()){
            $this->medico[] = $row;
        }
        return $this->medico;

    }

    public function Insertar($nombreMedico, $apellidoMedico, $telefonoMedico, $correoMedico, $tarjetaProfesional, $especialidadMedico, $estadoMedico, $idUsuarioFK){

        $slq = "INSERT INTO medico(nombreMedico, apellidoMedico, telefonoMedico, correoMedico, tarjetaProfesional, especialidadMedico, estadoMedico, idUsuarioFK) 
        VALUES('$nombreMedico', '$apellidoMedico', '$telefonoMedico', '$correoMedico', '$tarjetaProfesional', '$especialidadMedico', '$estadoMedico', '$idUsuarioFK')";


			
        $reslut = $this->db->query($slq);

    }

    public function Modificar($id, $nombreMedico, $apellidoMedico, $telefonoMedico, $correoMedico, $tarjetaProfesional, $especialidadMedico, $estadoMedico){

        $sql = "UPDATE medico SET nombreMedico = '$nombreMedico', apellidoMedico= '$apellidoMedico', telefonoMedico = '$telefonoMedico', correoMedico = '$correoMedico', tarjetaProfesional = '$tarjetaProfesional', especialidadMedico = '$especialidadMedico', estadoMedico = '$estadoMedico' WHERE idMedico = '$id' ";
			
        $resultado = $this->db->query($sql);	

    }

    public function Get_Medico($id)
    {
        $sql = "SELECT * FROM medico WHERE idMedico='$id' LIMIT 1";

        $resultado = $this->db->query($sql);

        $row = $resultado->fetch_assoc();

        return $row;
    }

    public function InhabilitarUsuario($id){

        $sql = "UPDATE medico SET estadoMedico = 0 WHERE idMedico = '$id'";

        $resultado = $this->db->query($sql);
    }


}

?>
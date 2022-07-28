<?php

class ModelAgenda {

    private $db;

    private $agenda;

    public function __construct(){
        
        $this->db = Database::conexion();

        $this->agenda = array();
    }

    public function ver_agenda(){

        $sql = "SELECT * FROM agenda";

        $valor = $this->db->query($sql);

        while($row = $valor->fetch_assoc()){
            $this->agenda[] = $row;
        }
        return $this->agenda;

    }

    public function Insertar($fechaAgenda, $horaAgenda, $Consultorio, $estadoAgenda, $idPacienteFk, $idMedicoFk){

        $slq = "INSERT INTO agenda(fechaAgenda, horaAgenda, Consultorio, estadoAgenda, idPacienteFk, idMedicoFk) VALUES('$fechaAgenda', '$horaAgenda', '$Consultorio', '$estadoAgenda', '$idPacienteFk', '$idMedicoFk')";
			
        $reslut = $this->db->query($slq);

    }



    public function Modificar($id, $fechaAgenda, $horaAgenda, $Consultorio, $estadoAgenda){

        $sql = "UPDATE agenda SET fechaAgenda = '$fechaAgenda', horaAgenda= '$horaAgenda', Consultorio = '$Consultorio', estadoAgenda = '$estadoAgenda' WHERE idAgenda = '$id' ";
			
        $resultado = $this->db->query($sql);	

    }

    public function Get_Agenda($id)
    {
        $sql = "SELECT * FROM agenda WHERE idAgenda='$id' LIMIT 1";

        $resultado = $this->db->query($sql);

        $row = $resultado->fetch_assoc();

        return $row;
    }

    public function InhabilitarAgenda($id){

        $sql = "UPDATE agenda SET estadoAgenda = 0 WHERE idAgenda = '$id'";

        $resultado = $this->db->query($sql);
    }


}

?>
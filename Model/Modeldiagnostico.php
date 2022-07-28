<?php

class ModelDiagnostico {

    private $db;

    private $diagnostico;

    public function __construct(){
        
        $this->db = Database::conexion();

        $this->diagnostico = array();
    }

    public function ver_diagnostico(){

        $sql = "SELECT * FROM diagnostico";

        $valor = $this->db->query($sql);

        while($row = $valor->fetch_assoc()){
            $this->diagnostico[] = $row;
        }
        return $this->diagnostico;

    }

    public function Insertar($Descripcion, $idConsultaFk){

        $slq = "INSERT INTO diagnostico (Descripcion, idConsultaFk) 
    VALUES('$Descripcion', '$idConsultaFk')";
			
        $reslut = $this->db->query($slq);

    }



    public function Modificar($id, $Descripcion){

        $sql = "UPDATE diagnostico SET Descripcion = '$Descripcion' WHERE idDiagnostico = '$id' ";
        $resultado = $this->db->query($sql);	

    }

    public function Get_Diagnostico($id)
    {
        $sql = "SELECT * FROM diagnostico WHERE idDiagnostico='$id' LIMIT 1";

        $resultado = $this->db->query($sql);

        $row = $resultado->fetch_assoc();

        return $row;
    }

    /*

    public function InhabilitarPaciente($id){

        $sql = "UPDATE paciente SET estadoPaciente = 0 WHERE idPaciente = '$id'";

        $resultado = $this->db->query($sql);
    }

    */

}

?>
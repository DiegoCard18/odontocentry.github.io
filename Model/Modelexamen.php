<?php

class ModelExamen {

    private $db;

    private $examen;

    public function __construct(){
        
        $this->db = Database::conexion();

        $this->usuario = array();
    }

    public function ver_examen(){

        $sql = "SELECT * FROM examen";

        $valor = $this->db->query($sql);

        while($row = $valor->fetch_assoc()){
            $this->examen[] = $row;
        }
        return $this->examen;

    }

    public function Insertar($Valor, $fechaExamen, $idHistoriaFk){

        $slq = "INSERT INTO examen(Valor, fechaExamen, idHistoriaFk) VALUES('$Valor', '$fechaExamen', '$idHistoriaFk')";
			
        $reslut = $this->db->query($slq);

    }



    public function Modificar($id, $Valor, $fechaExamen){

        $sql = "UPDATE examen SET Valor = '$Valor', fechaExamen= '$fechaExamen' WHERE idExamen = '$id' ";
			
        $resultado = $this->db->query($sql);	

    }

    public function Get_Examen($id)
    {
        $sql = "SELECT * FROM examen WHERE idExamen='$id' LIMIT 1";

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
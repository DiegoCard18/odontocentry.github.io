<?php

class ModelHistoria {

    private $db;

    private $historia;

    public function __construct(){
        
        $this->db = Database::conexion();

        $this->historia = array();
    }

    public function ver_historia(){

        $sql = "SELECT * FROM historia_clinica";

        $valor = $this->db->query($sql);

        while($row = $valor->fetch_assoc()){
            $this->historia[] = $row;
        }
        return $this->historia;

    }

    public function Insertar($Estatura, $Peso, $antecedentesFamiliares, $Alergias, $enfermedadesPadecidas, $idPacienteFk){

        $slq = "INSERT INTO historia_clinica(Estatura, Peso, antecedentesFamiliares, Alergias, enfermedadesPadecidas, idPacienteFk) 
        VALUES('$Estatura', '$Peso', '$antecedentesFamiliares', '$Alergias', '$enfermedadesPadecidas', '$idPacienteFk')";
			
        $reslut = $this->db->query($slq);

    }



    public function Modificar($id, $Estatura, $Peso, $antecedentesFamiliares, $Alergias, $enfermedadesPadecidas){

        $sql = "UPDATE historia_clinica SET 
        Estatura = '$Estatura', 
        Peso= '$Peso', 
        antecedentesFamiliares = '$antecedentesFamiliares', 
        Alergias = '$Alergias', 
        enfermedadesPadecidas = '$enfermedadesPadecidas' 
        WHERE idHistoria = '$id' ";
			
        $resultado = $this->db->query($sql);	

    }

    public function Get_Usuario($id)
    {
        $sql = "SELECT * FROM historia_clinica WHERE idHistoria='$id' LIMIT 1";

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
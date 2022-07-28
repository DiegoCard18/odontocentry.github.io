<?php

class HistoriaController {

    //Constructor del Modelo

    public function __construct(){

        require_once "Model/Modelhistoria.php";
    }

    //Vista Index 

    public function Index(){


        $historia = new ModelHistoria();

        $datos["titulo"] = "Historia Clínica";

        $datos["historia"] = $historia->ver_historia();

        require_once "View/Historia/Historia.php";

    }

    //Vista Crear Usuario

    public function Nuevo(){
			
        $data["titulo"] = "Crear una nueva Historia";

        require_once "View/Historia/Crear_Historia.php";
    }



    //Guardar Datos

    public function Guardar(){
			
        $Estatura = $_POST['Estatura'];
        $Peso = $_POST['Peso'];
        $antecedentesFamiliares = $_POST['antecedentesFamiliares'];
        $Alergias = $_POST['Alergias'];
        $enfermedadesPadecidas = $_POST['enfermedadesPadecidas'];
        $idPacienteFk = $_POST['idPacienteFk'];

        $historia = new ModelHistoria();

        $historia->Insertar($Estatura, $Peso, $antecedentesFamiliares, $Alergias, $enfermedadesPadecidas, $idPacienteFk);

        $data["titulo"] = "Historia";

        $this->Index();
    }


        //Vista Editar Usuario

    public function Modificar($id){
			
        $historia = new ModelHistoria();
            
        $datos["id"] = $id;
    
        $datos["historia"] = $historia->Get_Usuario($id);
    
        $datos["titulo"] = "Historia";
    
        require_once "View/Historia/Editar_Historia.php";
        
    }

    //Actualizar Datos de usuario

    public function Actualizar(){

        $id = $_POST['id'];
        $Estatura = $_POST['Estatura'];
        $Peso = $_POST['Peso'];
        $antecedentesFamiliares = $_POST['antecedentesFamiliares'];
        $Alergias = $_POST['Alergias'];
        $enfermedadesPadecidas = $_POST['enfermedadesPadecidas'];

        $historia = new ModelHistoria();
        $historia->Modificar($id, $Estatura, $Peso, $antecedentesFamiliares, $Alergias, $enfermedadesPadecidas);

        $datos["titulo"] = "Historia";


        $this->Index();
    }

    /*

    public function Inhabilitar($id){
			
        $usuario = new ModelUsuario();
    
        $usuario->InhabilitarUsuario($id);
    
        $datos["titulo"] = "Usuario";
    
        $this->Index();
        
    }*/


    
}

<?php

class ExamenController {

    //Constructor del Modelo

    public function __construct(){

        require_once "Model/Modelexamen.php";
    }

    //Vista Index 

    public function Index(){


        $examen = new ModelExamen();

        $datos["titulo"] = "Examen";

        $datos["examen"] = $examen->ver_examen();

        require_once "View/Examen/Examen.php";

    }

    //Vista Crear Usuario

    public function Nuevo(){
			
        $data["titulo"] = "Crear un nuevo Usuario";

        require_once "View/Examen/Crear_Examen.php";
    }



    //Guardar Datos

    public function Guardar(){
			
        $Valor = $_POST['Valor'];
        $fechaExamen = $_POST['fechaExamen'];
        $idHistoriaFk = $_POST['idHistoriaFk'];
        
        $usuario = new ModelExamen();

        $usuario->Insertar($Valor, $fechaExamen, $idHistoriaFk);

        $data["titulo"] = "Examen";

        $this->Index();
    }

        //Vista Editar Usuario

    public function Modificar($id){
			
        $examen = new ModelExamen();
            
        $datos["idExamen"] = $id;
    
        $datos["examen"] = $examen->Get_Examen($id);
    
        $datos["titulo"] = "Examen";
    
        require_once "View/Examen/Editar_Examen.php";
        
    }

    //Actualizar Datos de usuario

    public function Actualizar(){

        $id = $_POST['idExamen'];
        $Valor = $_POST['Valor'];
        $fechaExamen = $_POST['fechaExamen'];

        $usuario = new ModelExamen();
        $usuario->Modificar($id, $Valor, $fechaExamen);

        $data["titulo"] = "Examen";

        $this->Index();
    }

    public function Inhabilitar($id){
			
        $usuario = new ModelUsuario();
    
        $usuario->InhabilitarUsuario($id);
    
        $datos["titulo"] = "Usuario";

        $datos['Valor'] = "Se guardo Sastifactoriamente";
    
        $this->Index();
        
    }


    
}

<?php

class ConsultaController {

    //Constructor del Modelo

    public function __construct(){

        require_once "Model/Modelconsulta.php";
    }

    //Vista Index 

    public function Index(){


        $consulta = new ModelConsulta();

        $datos["titulo"] = "Consulta médica";

        $datos["consulta"] = $consulta->ver_consulta();

        require_once "View/Consulta/Consulta.php";

    }

    //Vista Crear Usuario

    public function Nuevo(){
			
        $datos["titulo"] = "Crear una nueva Consulta Médica";

        require_once "View/Consulta/Crear_Consulta.php";
    }



    //Guardar Datos

    public function Guardar(){
			
        $horaAtencion = $_POST['horaAtencion'];
        $motivoConsulta = $_POST['motivoConsulta'];
        $Enfermedad = $_POST['Enfermedad'];
        $idHistoriaFk = $_POST['idHistoriaFk'];
        
        $consulta = new ModelConsulta();

        $consulta->Insertar($horaAtencion, $motivoConsulta, $Enfermedad, $idHistoriaFk);

        $data["titulo"] = "Consulta";

        $this->Index();
    }

        //Vista Editar Usuario

    public function Modificar($id){
			
        $consulta = new ModelConsulta();
            
        $datos["idConsulta"] = $id;
    
        $datos["consulta"] = $consulta->Get_Consulta($id);
    
        $datos["titulo"] = "Consulta";
    
        require_once "View/Consulta/Editar_Consulta.php";
        
    }

    //Actualizar Datos de usuario

    public function Actualizar(){

        $id = $_POST['idConsulta'];
        $horaAtencion = $_POST['horaAtencion'];
        $motivoConsulta = $_POST['motivoConsulta'];
        $Enfermedad = $_POST['Enfermedad'];

        $consulta = new ModelConsulta();
        $consulta->Modificar($id, $horaAtencion, $motivoConsulta, $Enfermedad);

        $data["titulo"] = "Consulta";

        $this->Index();
    }

    /*

    public function Inhabilitar($id){
			
        $usuario = new ModelUsuario();
    
        $usuario->InhabilitarUsuario($id);
    
        $datos["titulo"] = "Usuario";

        $datos['Valor'] = "Se guardo Sastifactoriamente";
    
        $this->Index();
        
    }

    */


    
}

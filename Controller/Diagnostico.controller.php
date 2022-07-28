<?php

class DiagnosticoController {

    //Constructor del Modelo

    public function __construct(){

        require_once "Model/Modeldiagnostico.php";
    }

    //Vista Index Paciente

    public function Index(){

        $diagnostico = new ModelDiagnostico();

        $datos["titulo"] = "Diagnostico";

        $datos["diagnostico"] = $diagnostico->ver_diagnostico();

        require_once "View/Diagnostico/Diagnostico.php";

    }

    //Vista Crear Usuario

    public function Nuevo(){
			
        $datos["titulo"] = "Crear un Diagnostico";
    
        require_once "View/Diagnostico/Crear_Diagnostico.php";
    }

    //Guardar Datos

    public function Guardar(){
			
        $Descripcion = $_POST['Descripcion'];
        $idConsultaFk = $_POST['idConsultaFk'];

        $usuario = new ModelDiagnostico();

        $usuario->Insertar($Descripcion, $idConsultaFk);

        $data["titulo"] = "Diagnostico";

        $this->Index();
    }

        //Vista Editar Usuario

    public function Modificar($id){
			
        $paciente = new ModelDiagnostico();
            
        $datos["id"] = $id;
    
        $datos["diagnostico"] = $paciente->Get_Diagnostico($id);
    
        $datos["titulo"] = "Diagnostico";
    
        require_once "View/Diagnostico/Editar_diagnostico.php";
        
    }

    //Actualizar Datos de usuario

    public function Actualizar(){

        $id = $_POST['idDiagnostico'];
        $Descripcion = $_POST['Descripcion'];

        $vehiculos = new ModelDiagnostico();

        $vehiculos->Modificar($id, $Descripcion);

        $data["titulo"] = "Diagnostico";

        $this->Index();
    }

    /*

    public function Inhabilitar($id){
			
        $usuario = new ModelPaciente();
    
        $usuario->InhabilitarPaciente($id);
    
        $datos["titulo"] = "Paciente";
    
        $this->Index();
        
    }

    */


}

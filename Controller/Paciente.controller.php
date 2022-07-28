<?php

class PacienteController {

    //Constructor del Modelo

    public function __construct(){

        require_once "Model/Modelpaciente.php";
    }

    //Vista Index Paciente

    public function Index(){

        $paciente = new ModelPaciente();

        $datos["titulo"] = "Pacientes";

        $datos["paciente"] = $paciente->ver_paciente();

        require_once "View/Paciente/Paciente.php";

    }

    //Vista Crear Usuario

    public function Nuevo(){
			
        $data["titulo"] = "Crear un Paciente Usuario";
    
        require_once "View/Paciente/Crear_Paciente.php";
    }

    //Guardar Datos

    public function Guardar(){
			
        $correoPaciente = $_POST['correoPaciente'];
        $nombrePaciente = $_POST['nombrePaciente'];
        $apellidoPaciente = $_POST['apellidoPaciente'];
        $direccionPaciente = $_POST['direccionPaciente'];
        $telefonoPaciente = $_POST['telefonoPaciente'];
        $fechaNacimiento = $_POST['fechaNacimiento'];
        $estadoPaciente = $_POST['estadoPaciente'];
        $idUsuarioFK = $_POST['idUsuarioFK'];

        $usuario = new ModelPaciente();

        $usuario->Insertar($nombrePaciente, $apellidoPaciente, $direccionPaciente, $telefonoPaciente, $correoPaciente, $fechaNacimiento, $estadoPaciente, $idUsuarioFK);

        $data["titulo"] = "Paciente";

        $this->Index();
    }

        //Vista Editar Usuario

    public function Modificar($id){
			
        $paciente = new ModelPaciente();
            
        $datos["id"] = $id;
    
        $datos["Paciente"] = $paciente->Get_Paciente($id);
    
        $datos["titulo"] = "Paciente";
    
        require_once "View/Paciente/Editar_paciente.php";
        
    }

    //Actualizar Datos de usuario

    public function Actualizar(){

        $id = $_POST['id'];
        $correoPaciente = $_POST['correoPaciente'];
        $nombrePaciente = $_POST['nombrePaciente'];
        $apellidoPaciente = $_POST['apellidoPaciente'];
        $direccionPaciente = $_POST['direccionPaciente'];
        $telefonoPaciente = $_POST['telefonoPaciente'];
        $fechaNacimiento = $_POST['fechaNacimiento'];
        $estadoPaciente = $_POST['estadoPaciente'];

        $vehiculos = new ModelPaciente();

        $vehiculos->Modificar($id, $nombrePaciente, $apellidoPaciente, $direccionPaciente, $telefonoPaciente, $correoPaciente, $fechaNacimiento, $estadoPaciente);

        $data["titulo"] = "Paciente";

        $this->Index();
    }

    public function Inhabilitar($id){
			
        $usuario = new ModelPaciente();
    
        $usuario->InhabilitarPaciente($id);
    
        $datos["titulo"] = "Paciente";
    
        $this->Index();
        
    }


}

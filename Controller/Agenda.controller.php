<?php

class AgendaController {

    //Constructor del Modelo

    public function __construct(){

        require_once "Model/Modelagenda.php";
    }

    //Vista Index 

    public function Index(){


        $Agenda = new ModelAgenda();

        $datos["titulo"] = "Agenda";

        $datos["agenda"] = $Agenda->ver_agenda();

        require_once "View/Agenda/Agenda.php";

    }

    //Vista Crear Usuario

    public function Nuevo(){
			
        $data["titulo"] = "Crear una agenda";

        require_once "View/Agenda/Crear_Agenda.php";
    }



    //Guardar Datos

    public function Guardar(){
			
        $fechaAgenda = $_POST['fechaAgenda'];
        $horaAgenda = $_POST['horaAgenda'];
        $Consultorio = $_POST['Consultorio'];
        $estadoAgenda = $_POST['estadoAgenda'];
        $idPacienteFk = $_POST['idPacienteFk'];
        $idMedicoFk = $_POST['idMedicoFk'];
        
        $usuario = new ModelAgenda();

        $usuario->Insertar($fechaAgenda, $horaAgenda, $Consultorio, $estadoAgenda, $idPacienteFk, $idMedicoFk);

        $data["titulo"] = "Agenda";

        $this->Index();
    }

        //Vista Editar Usuario

    public function Modificar($id){
			
        $agenda = new ModelAgenda();
            
        $datos["idAgenda"] = $id;
    
        $datos["agenda"] = $agenda->Get_Agenda($id);
    
        $datos["titulo"] = "Agenda";
    
        require_once "View/Agenda/Editar_Agenda.php";
        
    }

    //Actualizar Datos de usuario

    public function Actualizar(){

        $id = $_POST['idUsuario'];
        $fechaAgenda = $_POST['fechaAgenda'];
        $horaAgenda = $_POST['horaAgenda'];
        $Consultorio = $_POST['Consultorio'];
        $estadoAgenda = $_POST['estadoAgenda'];

        $usuario = new ModelAgenda();
        $usuario->Modificar($id, $fechaAgenda, $horaAgenda, $Consultorio, $estadoAgenda);

        $data["titulo"] = "Agenda";

        $this->Index();
    }

    public function Inhabilitar($id){
			
        $agenda = new ModelAgenda();
    
        $agenda->InhabilitarAgenda($id);
    
        $datos["titulo"] = "Agenda";
    
        $this->Index();
        
    }


    
}

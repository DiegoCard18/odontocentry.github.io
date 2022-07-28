<?php

class MedicoController
{

    //Constructor del Modelo

    public function __construct()
    {

        require_once "Model/Modelmedico.php";
    }

    //Vista Index 

    public function Index()
    {


        $medico = new ModelMedico();

        $datos["titulo"] = "Médico";

        $datos["medico"] = $medico->ver_medico();

        require_once "View/Medico/Medico.php";
    }

    //Vista Crear Usuario

    public function Nuevo()
    {

        $data["titulo"] = "Crear un nuevo Médico";

        require_once "View/Medico/Crear_Medico.php";
    }



    //Guardar Datos

    public function Guardar()
    {

        $nombreMedico = $_POST['nombreMedico'];
        $apellidoMedico = $_POST['apellidoMedico'];
        $telefonoMedico = $_POST['telefonoMedico'];
        $correoMedico = $_POST['correoMedico'];
        $tarjetaProfesional = $_POST['tarjetaProfesional'];
        $especialidadMedico = $_POST['especialidadMedico'];
        $estadoMedico = $_POST['estadoMedico'];
        $idUsuarioFK = $_POST['idUsuarioFK'];

        $medico = new ModelMedico();

        $medico->Insertar($nombreMedico, $apellidoMedico, $telefonoMedico, $correoMedico, $tarjetaProfesional, $especialidadMedico, $estadoMedico, $idUsuarioFK);

        $data["titulo"] = "Medico";

        $this->Index();
    }

    //Vista Editar Usuario

    public function Modificar($id)
    {

        $medico = new ModelMedico();

        $datos["id"] = $id;

        $datos["medico"] = $medico->Get_Medico($id);

        $datos["titulo"] = "Medico";

        require_once "View/Medico/Editar_Medico.php";
    }

    //Actualizar Datos de usuario

    public function Actualizar()
    {

        $id = $_POST['id'];
        $nombreMedico = $_POST['nombreMedico'];
        $apellidoMedico = $_POST['apellidoMedico'];
        $telefonoMedico = $_POST['telefonoMedico'];
        $correoMedico = $_POST['correoMedico'];
        $tarjetaProfesional = $_POST['tarjetaProfesional'];
        $especialidadMedico = $_POST['especialidadMedico'];
        $estadoMedico = $_POST['estadoMedico'];

        $medico = new ModelMedico();
        $medico->Modificar($id, $nombreMedico, $apellidoMedico, $telefonoMedico, $correoMedico, $tarjetaProfesional, $especialidadMedico, $estadoMedico);

        $data["titulo"] = "Médico";

        $this->Index();
    }

    public function Inhabilitar($id)
    {

        $usuario = new ModelMedico();

        $usuario->InhabilitarUsuario($id);

        $datos["titulo"] = "Médico";

        $this->Index();
    }
}

?>

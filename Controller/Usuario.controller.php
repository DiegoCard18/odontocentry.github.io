<?php

class UsuarioController {

    //Constructor del Modelo

    public function __construct(){

        require_once "Model/Modelusuario.php";
    }

    //Vista Index 

    public function Index(){


        $usuario = new ModelUsuario();

        $datos["titulo"] = "Usuarios";

        $datos["usuarios"] = $usuario->ver_usuarios();

        require_once "View/Usuario/Usuarios.php";

    }

    //Vista Crear Usuario

    public function Nuevo(){
			
        $data["titulo"] = "Crear un nuevo Usuario";

        require_once "View/Usuario/Crear_Usuarios.php";
    }

    /*
    
    public function VerificarMail(){

    }

    */



    //Guardar Datos

    public function Guardar(){
			
        $id = $_POST['idUsuario'];
        $nombreUsuario = $_POST['nombreUsuario'];
        $apellidoUsuario = $_POST['apellidoUsuario'];
        $correoUsuario = $_POST['correoUsuario'];
        $telefonoUsuario = $_POST['telefonoUsuario'];
        $direccionUsuario = $_POST['direccionUsuario'];
        $passwordUsuario = $_POST['passwordUsuario'];
        $rolUsuario = $_POST['rolUsuario'];
        $estadoUsuario = $_POST['estadoUsuario'];
        
        $usuario = new ModelUsuario();

        $usuario->Insertar($id, $nombreUsuario, $apellidoUsuario, $correoUsuario, $telefonoUsuario, $direccionUsuario, $passwordUsuario, $rolUsuario, $estadoUsuario);

        $data["titulo"] = "Usuario";

        $this->Index();
    }

        //Vista Editar Usuario

    public function Modificar($id){
			
        $usuario = new ModelUsuario();
            
        $datos["idUsuario"] = $id;
    
        $datos["usuario"] = $usuario->Get_Usuario($id);
    
        $datos["titulo"] = "Usuario";
    
        require_once "View/Usuario/Editar_Usuario.php";
        
    }

    //Actualizar Datos de usuario

    public function Actualizar(){

        $id = $_POST['idUsuario'];
        $nombreUsuario = $_POST['nombreUsuario'];
        $apellidoUsuario = $_POST['apellidoUsuario'];
        $correoUsuario = $_POST['correoUsuario'];
        $telefonoUsuario = $_POST['telefonoUsuario'];
        $direccionUsuario = $_POST['direccionUsuario'];
        $passwordUsuario = $_POST['passwordUsuario'];
        $rolUsuario = $_POST['rolUsuario'];
        $estadoUsuario = $_POST['estadoUsuario'];

        $usuario = new ModelUsuario();
        $usuario->Modificar($id, $nombreUsuario, $apellidoUsuario, $correoUsuario, $telefonoUsuario, $direccionUsuario, $passwordUsuario, $rolUsuario, $estadoUsuario);

        $data["titulo"] = "Usuario";

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

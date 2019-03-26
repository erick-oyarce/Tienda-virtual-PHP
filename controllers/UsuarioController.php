<?php

require_once 'models/usuario.php';

class UsuarioController {

    public function index() {
        echo "Controlador usuario, accion index";
    }

    public function registro() {
        require_once 'views/usuario/registro.php';
    }

    public function save() {
        if (isset($_POST)) {

            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
            $email = isset($_POST['email']) ? trim($_POST['email']) : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;

            //Array de errores

            $errores = array();

            // validar datos antes de almacenarlos
            //validar campo nombre
            if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
                $nombre_valido = true;
            } else {
                $nombre_valido = false;
                $errores ['nombre'] = "El nombre no es válido";
            }

            //validar campo nombre
            if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
                $apellido_valido = true;
            } else {
                $apellido_valido = false;
                $errores ['apellidos'] = "Los apellidos no son válidos";
            }

            //validar el email
            if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email_valido = true;
            } else {
                $email_valido = false;
                $errores ['email'] = "El email no es válido";
            }

            //validacion de la contraseña
            if (!empty($password)) {
                $password_valido = true;
            } else {
                $password_valido = false;
                $errores ['password'] = "La contraseña está vacía";
            }

            if (sizeof($errores) == 0) {

                $usuario = new Usuario();
                $usuario->setNombre($nombre);
                $usuario->setApellidos($apellidos);
                $usuario->setEmail($email);
                $usuario->setPassword($password);
                $save = $usuario->save();

                if($save) {
                    $_SESSION['register'] = "complete";
                } else {
                    $_SESSION['register'] = "failed";
                    $_SESSION['error'] = $errores;
                }
            } else {
                $_SESSION['register'] = "failed";
                $_SESSION['errores'] = $errores;
                
            }
            header("Location:" . base_url . "usuario/registro");
        }
        header("Location:" . base_url . "usuario/registro");
    }
    
    public function login(){
        if(isset($_POST)){
            //identificar al usuario
            //consultar a la base de datos
            $usuario =  new Usuario();
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);
            
            $identity = $usuario->login();
            
            if($identity && is_object($identity)){
                $_SESSION['identity']=$identity;
                
                if($identity->rol == 'admin'){
                    $_SESSION['admin'] = true;
                }
            }else{
                $_SESSION['error_login'] = 'Identificación fallida';
            }
           
        }
        header("Location:".base_url);
    }
    
    public function logout(){
        if(isset($_SESSION['identity'])){
            unset($_SESSION['identity']);
        }
        
        if(isset($_SESSION['admin'])){
            unset($_SESSION['admin']);
        }
        
        header("Location:".base_url);
        
    }

}//fin de la clase

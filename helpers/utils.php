<?php


class Utils{
    
    //funcion para eliminar sesiones, cuando un usuario realiza un logout
    public static function deleteSession($name){
        if(isset($_SESSION[$name])){
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }
        
        return $name;
    
    }
    
    //comprueba si existe una sesión de administrador
    public static function isAdmin(){
        if(!isset($_SESSION['admin'])){
            header("Location:".base_url);
        }else{
            return true;
        }
    }
    
    //funcion para mostrar errores en el formulario de registro
    public static function mostrarError($error, $campo){
        $alerta = '';
        if(isset($error[$campo]) && !empty($campo)){
            $alerta = "<div class='alerta alerta-error'>".$error[$campo]."</div>";
        }    
        return $alerta;
    }
    
    //funcion para mostrar errores en la direccion url
    public static function show_error(){
        $error = new errorController();
        $error->index();
    }
    
    //funcion para mostrar todas las categorias
    public static function showCategorias(){
        
        require_once 'models/categoria.php';
        $categoria = new Categoria();
        $categorias = $categoria->getAll();
        
        return $categorias;
    }
}


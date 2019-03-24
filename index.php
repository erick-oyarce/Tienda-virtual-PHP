<?php

//inicio de sesiones
session_start();

//funcion que carga todos los controladores automaticamente
require_once 'autoload.php';

//llamada a la base de datos
require_once 'config/db.php';

//archivo que permite cargar algunas constates para posterior uso
require_once 'config/parameters.php';

//carga de clase con funciones de ayuda
require_once 'helpers/utils.php';

//vistas de archivo html
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';

//funcion para mostrar error de pagina



if(isset($_GET['controller'])){
    $nombre_controlador = $_GET['controller'].'Controller';
    
}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
    //controlador por default desde una constante
    $nombre_controlador = controller_default;
    
}else{
    show_error();
    exit();
}

if(class_exists($nombre_controlador)){
    
    $controlador = new $nombre_controlador;
    
    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
        $action = $_GET['action'];

        $controlador->$action();
    }elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
        //accion por default desde una constante
        $action_default = action_default;
        $controlador->$action_default();
        
        
    }else{
        show_error();
    }
    
}else{
    show_error();
}

require_once 'views/layout/footer.php';



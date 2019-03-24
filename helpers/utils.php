<?php


class Utils{
    public static function deleteSession($name){
        if(isset($_SESSION[$name])){
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }
        
        return $name;
        
        
    }
}

function mostrarError($error, $campo){
    $alerta = '';
    if(isset($error[$campo]) && !empty($campo)){
        $alerta = "<div class='alerta alerta-error'>".$error[$campo]."</div>";
    }    
    return $alerta;
}

function show_error(){
    $error = new errorController();
    $error->index();
}
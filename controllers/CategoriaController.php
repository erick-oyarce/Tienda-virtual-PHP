<?php

require_once 'models/categoria.php';
require_once 'models/producto.php';

class categoriaController{
    
    public function index(){
        Utils::isAdmin(); 
        $categoria = new Categoria();
        
        $categorias = $categoria->getAll();
        
        require_once 'views/categoria/index.php';
    }
    
    public function crear(){
        Utils::isAdmin();
        require_once 'views/categoria/crear.php';
    }
    
    public function save(){
        Utils::isAdmin();
        
        if(isset($_POST) && isset($_POST['nombre'])){
            
            //Guardar la categoria en la base de datos
            $categoria = new Categoria();
            $categoria->setNombre($_POST['nombre']);
            $categoria->save();
            
        }
        
        
        
        header("Location:".base_url."categoria/index");
    }
    
    public function ver(){
        
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            
            //conseguir categoria
            $categoriaGet = new Categoria();
            $categoriaGet->setId($id);
            $categoria = $categoriaGet->getOne();
            
            //obtener los productos
            $producto = new Producto();
            $producto->setCategoria_id($id);
            $productos = $producto->getAllCategory();
            
        }
        require_once 'views/categoria/ver.php';
    }
    
}
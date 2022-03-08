<?php
class LoginController{
    
    public function index(){
        
        
        include 'view/login.php';
    }
    
    public function login(){
        
        if(empty($_POST['identificar']))
            throw new Exception('No se recibió el formulario');
        
            
        $u = $_POST['usuario'];
        
        $c= md5($_POST['clave']);
        
       
        
        $identificado = Usuario::identificar($u,$c);
        
        if(!$identificado)
            throw  new Exception('Los datos de identificacion no son correctos');
   
       Login::set($identificado);
       
       (new UsuarioController())->show($identificado->id);
    }
    
    
    public function logout(){
        
        Login::clear();
            
        $controller =DEFAULT_CONTROLLER;
        $metodo = DEFAULT_METHOD;
                
         (new $controller())->$metodo();
    }
    
}
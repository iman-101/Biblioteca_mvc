<?php

class Login{
    
    public static $identificado = NULL;
    
    
    public static function init(){
        
        if(!empty($_SESSION['usuario']))
            self::$identificado = unserialize($_SESSION['usuario']);
        
           
    }
    
    
    public static function set(Usuario $u){
        
        self::$identificado =$u;
       $_SESSION['usuario']=serialize($u);
         
            
    }
    
    public static function clear(){
        
        self::$identificado =NULL;
        unset($_SESSION['usuario']);
      
        
    }
    
    public static function get():?Usuario{
        
        return self::$identificado;
        
        
    }
    
    public static function isAdmin():bool{
        
        return self::$identificado && self::$identificado->administrador;
        
        
    }
    
    public static function hasPrivilege(int $p):bool{
        
        return self::$identificado && self::$identificado->privilegio>= $p;
        
        
    }
            
}
    

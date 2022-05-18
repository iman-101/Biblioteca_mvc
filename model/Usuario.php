<?php
class Usuario extends Model{
    
    public $id=0, $usuario='', $clave='',$nombre='',$apellido1='',$apellido2,
    
    $privilegio=0,$administrador =0, $email='',$imagen=''
    ;
    
    
    public static function identificar(string $u='',string $p=''):?Usuario{
        
        $consulta="SELECT * FROM usuarios WHERE (usuario='$u' or email='$u')
        and clave='$p'";
        
        return DB::select($consulta,self::class);
    }
    
    
    public function getByUserMail(string $u,string $e):?Usuario{
        
        $consulta="SELECT * FROM usuarios WHERE usuario='$u' AND email='$e'";

        return DB::select($consulta,self::class);
    }
    
   
}

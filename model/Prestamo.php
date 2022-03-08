<?php

class Prestamo extends Model{
    
    
    public $idsocio =0,$idejemplar =0,$limite ='';
    
    public function actualizarLimit(string $a,int $id){
        
       $consulta="UPDATE prestamos SET limite ='$a' WHERE id=$id" ;
       echo $consulta;
        return DB::update($consulta);
        
    }
    
}
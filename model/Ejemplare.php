<?php
class Ejemplare extends Model{
    
    public $idlibro =0, $anyo=0, $edicion=0, $precio=0;
    
    
    
    public function getELibro(){
        $consulta = "SELECT * FROM libros WHERE idlibro= $this->id";
        return DB::selectAll($consulta,'Libro');
    }
    
    
 
}
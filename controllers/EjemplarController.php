<?php
class EjemplarController{
    
    public function create(int $idlibro=0){
        
        $libro  = Libro::getById($idlibro);
        
        if(!$libro)
            throw  new Exception("No se encontró el libro");
        
       include 'view/ejemplar/nuevo.php'; 
        
    }
    
    public function store(){
        
        if(empty($_POST['guardar']))
            throw new Exception('No se recibieron datos');
        
        $e = new Ejemplare();    
        
        
        $e->idlibro =intval($_POST['idlibro']);
        
        $e->anyo = intval($_POST['anyo']);
        
        
        $e->edicion =intval($_POST['edicion']);
        
        
        $e->precio =floatval($_POST['precio']);
        
        if(!$e->guardar())
            throw  new Exception("No se pudo guardar");
            
       (new LibroController())->show($e->idlibro);
            
    }
    
    
    public function delete(int $id=0){
        
        if(!$ejemplar = Ejemplare::getById($id))
            throw new Exception("No se encontró el ejemplar $id");
        
        $libro=Libro::getById($ejemplar->idlibro);
            
      include 'view/ejemplar/borrar.php'; 
                
    }
    
    public function destroy(){
        
        if(empty($_POST['borrar']))
            throw new Exception('No se recibio  confirmación .');
          
            $id = intval($_POST['id']);
            $idlibro=intval($_POST['idlibro']);
            
            if(Ejemplare::borrar($id)===false)
                throw new Exception("No se pudo borrar.");
                
                
           (new LibroController())->show($idlibro) ;    
               
                
    }
    
   
}
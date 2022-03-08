<?php
class PrestamoController{
    
    public function create(int $idlibro=0){
        
        $socio  = Socio::getById($idlibro);
        
        $ejemplares=Ejemplare::get();
        
        
        
    
        
        if(!$socio)
            throw  new Exception("No se encontró el socio");
            
            include 'view/prestamo/nuevo.php';
            
    }
    
    public function store(){
        
        if(empty($_POST['guardar']))
            throw new Exception('No se recibieron datos');
            
            $e = new Prestamo();
            
           
           
            
            $e->idsocio =intval($_POST['idsocio']);
            
            $e->idejemplar = intval($_POST['campo']);
            
            
           // $e->devolucion =null;
            
            
            $e->limite =$_POST['limite'];
            
            if(!$e->guardar())
                throw  new Exception("No se pudo guardar");
                
            (new SocioController())->show($e->idsocio);
                
    }
    
    
    public function delete(int $id=0){
        
        if(!$prestamo = Prestamo::getById($id))
            throw new Exception("No se encontró el prestamo $id");
            
            $socio=socio::getById($prestamo->idsocio);
            
            include 'view/prestamo/borrar.php';
            
    }
    
    public function destroy(){
        
        if(empty($_POST['borrar']))
            throw new Exception('No se recibio  confirmación .');
            
            $id = intval($_POST['id']);
            $idsocio=intval($_POST['idsocio']);
            
            if(Prestamo::borrar($id)===false)
                throw new Exception("No se pudo borrar.");
                
                
                (new SocioController())->show($idsocio) ;
                
                
    }
    public function update(){
        
        if(empty($_POST['actualizar']))
            throw new Exception('No se recibieron datos .');
            
            
            $prestamo = new Prestamo();
            $prestamo->id=intval($_POST['id']);
            $prestamo->idsocio=intval($_POST['idsocio']);
            $prestamo->idejemplar=intval($_POST['idejemplar']);
            
            $fecha_actual= Prestamo::getById($prestamo->id);
           
          // $a=intval($_POST['limite']);
          
          
          $prestamo->limite = date("Y-m-d",strtotime($fecha_actual->limite."+ 3 days"));
         
          if($prestamo->actualizarLimit($prestamo->limite,$prestamo->id) === false)
                
                throw  new Exception("No se pudo actualizar $prestamo->limite");
                
                $GLOBALS['mensaje'] ="Actualizar del prestamo $prestamo->id correcta.";
                
              //  $this->edit($prestamo->id);
                $socio = Socio::getById($prestamo->idsocio);
                $prestamos=$socio->getPrestamos();
                
                include 'view/socio/detalles.php';
    }
    
    public function edit(int $id=0){
        
        if(!$id)
            throw new Exception('No se indico el socio.');
            
            
            $prestamo = Prestamo::getById($id);
         
            if(!$prestamo)
                throw new Exception("No existe el prestamo $id");
                
                
                
               // include 'view/socio/detalles.php';
                include 'view/prestamo/actualizar.php';
    }
    
    public function devolver(int $idprestamo){
        
       
        
        $pre =Prestamo::getById($idprestamo);
        $pre->devolucion=date("Y-m-d");
      
       
        
        if($pre->actualizar() === false)
            
            throw  new Exception("No se pudo actualizar $pre->devolucion");
        $socio = Socio::getById($pre->idsocio);
        $prestamos=$socio->getPrestamos();
        include 'view/socio/detalles.php';
        
    }
    
}
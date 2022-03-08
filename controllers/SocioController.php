<?php
class SocioController{
    
    
    
    public function index(){
        $this->list();
        
        
        
    }
    
    
    
    public function list(){
        $socios = Socio::get();
        
        
        include 'view/socio/lista.php';
    }
    
    
    public function show(int $id=0){
        if(!$id)
            throw new Exception("No se indicó el libro .");
            
            $socio=Socio::getById($id);
            
            
            if(!$socio)
                throw new Exception("No se ha encontrado el socio $id .");
                
                $prestamos =$socio->getPrestamos();
                
                include 'view/socio/detalles.php';
                
    }
    
    
    public function create(){
        
        include 'view/socio/nuevo.php';
        
    }
    
    public function store(){
        
        if(empty($_POST['guardar']))
            throw new Exception('No se recibieron datos');
            
            $socio = new Socio();
            $socio->dni =$_POST['dni'];
            $socio->nombre =$_POST['nombre'];
            $socio->apellidos =$_POST['apellidos'];
            $socio->poblacion =$_POST['poblacion'];
            $socio->provincia =$_POST['provincia'];
            $socio->telefono =$_POST['telefono'];
            $socio->nacimiento =$_POST['nacimiento'];
            $socio->cp =$_POST['cp'];
            $socio->email =$_POST['email'];
            $socio->direccion =$_POST['direccion'];
            
            if(!$socio->guardar())
                throw new Exception("No se pudo guardar $socio->nombre");
                
                
            $mensaje="Guardar del id $socio correcto.";
            include 'view/exito.php';
    }
    
    
    
    public function edit(int $id=0){
        
        if(!$id)
            throw new Exception('No se indico el socio.');
            
            
            $socio = Socio::getById($id);
            
            if(!$socio)
                throw new Exception("No existe el socio $id");
                
                
                
                include 'view/socio/actualizar.php';
    }
    
    public function update(){
        
        if(empty($_POST['actualizar']))
            throw new Exception('No se recibieron datos .');
            
            
            $socio = new Socio();
           
            $socio->id =intval($_POST['id']);
            $socio->dni =$_POST['dni'];
            $socio->nombre =$_POST['nombre'];
            $socio->apellidos =$_POST['apellidos'];
            $socio->poblacion =$_POST['poblacion'];
            $socio->provincia =$_POST['provincia'];
            $socio->telefono =$_POST['telefono'];
            $socio->nacimiento =$_POST['nacimiento'];
            $socio->cp =$_POST['cp'];
            $socio->email =$_POST['email'];
            $socio->direccion =$_POST['direccion'];
           
            if(!empty($_POST['eleminarimagen'])){
                $imagenABorrar =$socio->imagen;
                $socio->imagen =NULL;
            }
            if(Upload::arrive('imagen')){
                $imagenASustituir = $socio->imagen;
                $socio->imagen =Upload::save('imagen', 'img/socios', true,0,'image/*','book_');
            }
            
            
          
            
            if($socio->actualizar() === false)
                
                throw  new Exception("No se pudo actualizar $libro->titulo");
                
                $GLOBALS['mensaje'] ="Actualizar del socio $socio->id correcta.";
                
                $this->edit($socio->id);
    }
    
    
    public function delete(int $id=0){
        
        if(!$id){
            throw new Exception("No se indico el libro a borrar.");
        }
        
        $socio=Socio::getById($id);
        
        if(!$socio){
            throw new Exception("No se existe el socio $id.");
        }
        
        include 'view/socio/borrar.php';
    }
    
    
    public function destroy(){
        if(empty($_POST['borrar']))
            throw new Exception('No se recibio  confirmación .');
            
            $id = intval($_POST['id']);
            
            
            if(Socio::borrar($id)===false)
                throw new Exception("No se pudo borrar.");
                
                
                $mensaje="Borrado  del socio $id correcto.";
                include 'view/exito.php';
                
    }
    
    
    
    
    public function buscar(){
        
        if(empty($_POST['buscar'])){
            $this->list();
            return;
        }
        
        
        
        $campo=$_POST['campo'];
        $valor=$_POST['valor'];
        $orden=$_POST['orden'];
        $sentido =empty($_POST['sentido'])? 'ASC' : $_POST['sentido'];
        
        $socios =Socio::getFiltred($campo, $valor, $orden, $sentido);
        
        require_once 'view/socio/lista.php';
        
        
    }
    
    
    
    
}
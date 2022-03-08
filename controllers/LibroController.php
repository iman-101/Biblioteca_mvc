<?php
class LibroController{
    
    
    
    public function index(){
        $this->list();
        
        
  
    }
    
    
    
    public function list(){
        $libros = Libro::get();
        
        
        include 'view/libro/lista.php';
    }
    
    
    public function show(int $id=0){
        if(!$id)
            throw new Exception("No se indicó el libro .");
        
       $libro=Libro::getById($id);
       
       
       if(!$libro)
           throw new Exception("No se ha encontrado el libro $id .");
       
      $ejemplares =$libro->getEjemplares();
       
        include 'view/libro/detalles.php';
       
    }
    
    
    public function create(){
        
        if(!(Login::isAdmin() || Login::hasPrivilege(500)))
            throw  new Exception("No tiene permiso para hacern esto.");
            
        include 'view/libro/nuevo.php';
        
    }
    
    public function store(){
        
        if(!(Login::isAdmin() || Login::hasPrivilege(500)))
            throw  new Exception("No tiene permiso para hacern esto.");
        
        if(empty($_POST['guardar']))
            throw new Exception('No se recibieron datos');
        
       $libro = new Libro();
       
       $libro->isbn =DB::escape($_POST['isbn']);
       $libro->titulo =DB::escape($_POST['titulo']);
       $libro->editorial =DB::escape($_POST['editorial']);
       $libro->autor =DB::escape($_POST['autor']);
       $libro->idioma =DB::escape($_POST['idioma']);
       $libro->ediciones =intval($_POST['ediciones']);
       $libro->edadrecomendada =intval($_POST['edadrecomendada']);
       
     $errores =$libro->errorDeValidacion();
       
       if(sizeof($errores)){
           throw new Exception(join('<br>', $errores));
       }
       if(Upload::arrive('imagen'))
           $libro->imagen = Upload::save(
           'imagen', 'img/libros', true,0,'image/*','book_');
       
       if(!$libro->guardar()){
           @unlink($libro->imagen);
           throw new Exception("No se pudo guardar $libro->titulo");
           }
           
       $mensaje="Guardar del ibro $libro correcto.";    
       include 'view/exito.php';
    }
   
    
    
    public function edit(int $id=0){
        
        if(!$id)
            throw new Exception('No se indico el libro.');
            
            
        $libro = Libro::getById($id);
            
        if(!$libro)
                throw new Exception("No existe el libro $id");
                
                
                
         include 'view/libro/actualizar.php';
    }
    
    public function update(){
        
        if(empty($_POST['actualizar']))
            throw new Exception('No se recibieron datos .');
            
        $libro =Libro::getById(intval($_POST['id'])); 
       // $libro = new Libro();
       
        if(!$libro)
            throw new Exception('No existe el libro.');
        //$libro->id=intval($_POST['id']);
        
        $libro->isbn =$_POST['isbn'];
        $libro->titulo =$_POST['titulo'];
        $libro->editorial =$_POST['editorial'];
        $libro->autor =$_POST['autor'];
        $libro->idioma =$_POST['idioma'];
        $libro->ediciones =intval($_POST['ediciones']);
        $libro->edadrecomendada =intval($_POST['edadrecomendada']);
       
        
        if(!empty($_POST['eleminarimagen'])){
            $imagenABorrar =$libro->imagen;
            $libro->imagen =NULL;
        }
        if(Upload::arrive('imagen')){
            $imagenASustituir = $libro->imagen;
            $libro->imagen =Upload::save('imagen', 'img/libros', true,0,'image/*','book_');
        }
        
        $errores =$libro->errorDeValidacion();
        
        if(sizeof($errores)){
            throw new Exception(join('<br>', $errores));
        }
        
        
        if($libro->actualizar() === false)
            
            throw  new Exception("No se pudo actualizar $libro->titulo");
        
       $GLOBALS['mensaje'] ="Actualizar del libro $libro->titulo correcta.";
       
       $this->edit($libro->id);
    }
    
    
    public function delete(int $id=0){
      
        if(!$id){
            throw new Exception("No se indico el libro a borrar.");
        }
        
        $libro=Libro::getById($id);
        
        if(!$libro){
            throw new Exception("No se existe el libro $id.");
        }
        
        include 'view/libro/borar.php';
    }
    
    
    public function destroy(){
        if(empty($_POST['borrar']))
            throw new Exception('No se recibio  confirmación .');
       
        $id = intval($_POST['id']);
        
        if(!$libro = Libro::getById($id))
            throw new Exception("No existe el libro $id");
            
        if(Libro::borrar($id)===false)
            throw new Exception("No se pudo borrar.");
        
        @unlink($libro->imagen);
                
        $mensaje="Borrado  del libro $id correcto.";
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
        
        $libros =Libro::getFiltred($campo, $valor, $orden, $sentido);
        
        require_once 'view/libro/lista.php';

        
    }
    
   public function exportJSON(bool $descargar = false){
       
       header('Content-type:aplication/json; charset=utf-8');
       
       if($descargar)
           header('Content-Disposition: attachement; filename="libros.json');
       
      echo JSON::encode(Libro::get());
       
   }
 
   
   
   
   
}


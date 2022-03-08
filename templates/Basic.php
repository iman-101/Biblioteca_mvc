<?php

class Basic{
    
    public static function header(string $pagina=''){?>
        
        <header>
            <h1>Aplicacion biblioteca</h1>
            <h2><?=$pagina?></h2>
        
        </header>
        
    <?php }
    
    
    public static function login(){
        echo " <div class='container-fluid con'> 
                 <div class='container'>   <div  class='d-flex p-2 bd-highlight  justify-content-end align-items-center login'>
                    <div class='m-2 '>";
        $identificado = Login::get();
        
        
        
        echo $identificado ?
          " <a href='/usuario/show/$identificado->id'  class='text-decoration-none'>
          $identificado->usuario</a><i class='fas fa-user me-3'></i>
            </div><div class='m-2'><a href='/login/logout' class='text-decoration-none'>Salir</a>
           " :
          "<a href='/login'  class='text-decoration-none'>Identificarse</a><i class='fas fa-user me-3'></i>
           </div>  <div class='m-2 '><a href='/usuario/create'>Registro</a>";
        echo " </div>
        </div>
        </div>
       </div>";
       
        
       
      
        
      
     }
   
   
   public static function nav(string $a){?>
       
      <div class="container-fluid shadow  mb-5 bg-body rounded">
    	   
         <div class="container nav-reglage ">
		  	  <nav class="navbar navbar-expand-md navbar-light  p-3">
		      
		      
		   <a class="navbar-brand" href="#">
               <img src="<?=$a?>img/biblogo.png" alt="logo" class="navbar-brand" width="40" >
            </a>
		        <button type="button" class="navbar-toggler bt " data-bs-toggle="collapse" data-bs-target="#first">
		          <span class="navbar-toggler-icon"></span>
		        </button>
		        <div class="collapse navbar-collapse" id="first">
		             <ul class="navbar-nav ms-auto myDiv" >
		               <li class="nav-item "><a href="/" class="nav-link active">Inicio<span class="sr-only"></span></a></li>
		               <li class="nav-item"><a href="/libro" class="nav-link">Lista de libros</a></li>
		               <?php if(Login::isAdmin() || Login::hasPrivilege(500)){?>
		               <li class="nav-item"><a href="/libro/create" class="nav-link">Nuevo libro</a></li>
		               <li class="nav-item"><a href="/socio" class="nav-link">Lista de socios</a></li>
		                <li class="nav-item"><a href="/socio/create" class="nav-link">Nuevo socio</a></li>
		             <?php } ?>
		              <li class="nav-item"><a href="/contacto" class="nav-link">Contactar</a></li>
		           
		            <?php if(Login::isAdmin()){?>
		            
		             <li class="nav-item"><a href="/usuario" class="nav-link">Lista de usuarios</a></li>    
		              <li class="nav-item"><a href="/usuario/create" class="nav-link">Nuevo usuario</a></li> 
		            
		             
                 <?php } ?>
		           </ul>
		      </div>

		   </nav>
		   
		 </div>
	</div>
	
  <?php }
 

 public static function footer(){?>
     
     <div class="d-flex justify-content-between p-4  border footer  align-items-center mt-5">
         <p>Aplicación creada por Saida El Malqi como ejemplo de clase. Desarrollada haciendo uso de <span class="fw-bold">Bootrtrap 5.</span></p>
         <img src="img/SAIDA.png" alt="saida" class="rounded-circle">
     </div>
<?php  }
    
    
}
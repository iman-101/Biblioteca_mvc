<?php
class Cool{
    
    public static function nav(){?>
       
      <div class="container-fluid">
    	   
         <div class="container nav-reglage ">
		  	  <nav class="navbar navbar-expand-md navbar-light  p-3">
		      
		      
		   <a class="navbar-brand" href="#">
               <img src="img/biblogo.png" alt="logo" class="navbar-brand" width="40" >
            </a>
		        <button type="button" class="navbar-toggler bt " data-bs-toggle="collapse" data-bs-target="#first">
		          <span class="navbar-toggler-icon"></span>
		        </button>
		        <div class="collapse navbar-collapse" id="first">
		             <ul class="navbar-nav ms-auto" >
		               <li class="nav-item "><a href="/" class="nav-link active">INICIO<span class="sr-only"></span></a></li>
		               <li class="nav-item"><a href="/libro" class="nav-link">LISTA DE LIBROS</a></li>
		               <li class="nav-item"><a href="/libro/create" class="nav-link">NUEVO LIBRO</a></li>
		              
		          
		               <li class="nav-item"><a href="/contacto" class="nav-link">CONTACTO</a></li>
		            </ul>
		             
          
		      
		      </div>
              
		   </nav>
		   <div>
		      <ul>
		         <li ><a href="/usuario/list" >LISTA DE USUARIOS</a></li>
		            <li><a href="/usuario/create" >NUEVO USUARIO</a></li>
		      </ul>
		   
		   </div>
		 </div>
	</div>
	
  <?php }
    
    
}
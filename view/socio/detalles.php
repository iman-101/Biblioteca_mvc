
<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
<!--font awsome-->
<link rel="stylesheet" type="text/css" href="../../mypro/css/all.min.css">
<!--jquery-->
<script type="text/javascript" src="../../js/jquery.js"></script>
<!--bootstrap js-->
<script src="../../js/bootstrap.min.js"></script>
<!--my style-->
<link rel="stylesheet" type="text/css" href="../../css/style.css">
<script type="text/javascript" src="../../js/myscript.js"></script>

<title>Biblioteca</title>
</head>
<body>
    <?php 
    Basic::login();
    Basic::nav("../../");
    ?>
      <div class="container">
<h2>Detalles del socio :<?=$socio->nombre?></h2>



<p><b>id:</b><?=$socio->id?></p>
<p><b>Nombre: </b><?=$socio->nombre?></p>
<p><img src="/<?=$socio->imagen?>" alt="<?=$socio->nombre?>"></p>
<p><b>Apellidos: </b><?=$socio->apellidos?></p>
<p><b>Poblacio: </b><?=$socio->provincia?></p>
<p><b>Poblacion: </b><?=$socio->poblacion?></p>
<p><b>Nacimiento: </b><?=$socio->nacimiento?></p>
<p><b>Email: </b><?=$socio->email?></p>
<p><b>Direccion: </b><?=$socio->direccion?></p>
<p><b>Codigo postal: </b><?=$socio->cp?></p>
<h2>Prestamos</h2>

   
  <table border='1' class="table table-striped">
  <?php 
  if($prestamos){
      
      echo "<tr>";
      foreach($prestamos as $e){
          if($e->devolucion===null){
              echo "<td>$e</td><td><a href='/prestamo/delete/$e->id'>Borrar</a></td><td>
          <a href='/prestamo/edit/$e->id'> Actualizar</a></td><td><a href='/prestamo/devolver/$e->id'> Devolver</a></td>";
              
              echo "</tr>";
          }else{
          echo "<td>$e</td><td></td><td></td><td><a href='/prestamo/delete/$e->id'>Borrar</a></td>
          ";
        
          echo "</tr>";
          }
      }
      
  }else{
      
      
      echo "<p>No tiene prestamo.</p>";
  }
  
  
  ?>
</table>

   <a href='/socio/edit/<?=$socio->id ?>'>Edita socio</a>
   <a href='/socio/delete/<?=$socio->id ?>'>Borrar</a>

   <a href='/prestamo/create/<?=$socio->id ?>'>Añadir prestamo</a>
  </div>
</body>
</html>
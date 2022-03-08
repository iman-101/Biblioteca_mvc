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
       
<script type="text/javascript" src="../js/activeClass.js"></script>  
<title>Biblioteca</title>
</head>
<body>
    <?php 
    (TEMPLATE)::login();
    (TEMPLATE)::nav("../../");
    ?>
    <div class="container">
   
      
     
   <h2 class="text-center">Lista de socios</h2>
   <div class="con text-white border p-4">
    <form method="post" action="/socio/buscar">
         
         <label>Camp:</label>
         
      <select name="campo">
         
              <option value="nombre" <?=!empty($campo) && $campo=='nombre'? ' selected ' :'';?>>
              
              Nombre</option>
              
              <option value="apellidos" <?=!empty($campo) && $campo=='apellidos'? ' selected ' :'';?>>
              
              Apellidos</option>
              
              <option value="dni" <?=!empty($campo) && $campo=='dni'? ' selected ' :'';?>>
              
              DNI</option>
              <option value="telefono" <?=!empty($campo) && $campo=='telefono'? ' selected ' :'';?>>
              
              Telefono</option>
               <option value="poblacion" <?=!empty($campo) && $campo=='poblacion'? ' selected ' :'';?>>
              
              Poblacion</option>
              
         </select>
         
        <label>Valor:</label>
        
        <input type="text" name="valor" value=""<?=!empty($valor)? $valor : '';?>>
        
         <label>Orden:</label> 
         
          <select name="orden">
             <option value="nombre" <?=!empty($orden) && $orden=='nombre'? ' selected ' :'';?>>
              
              Nombre</option>
              
              <option value="apellidos" <?=!empty($orden) && $orden=='apellidos'? ' selected ' :'';?>>
              
              Apellidos</option>
              
              <option value="dni" <?=!empty($orden) && $orden=='dni'? ' selected ' :'';?>>
              
              Dni</option>
                <option value="telefono" <?=!empty($orden) && $orden=='telefono'? ' selected ' :'';?>>
              
              Telefono</option>
                <option value="poblacion" <?=!empty($orden) && $orden=='poblacion'? ' selected ' :'';?>>
              
              Poblacion</option>
          </select>
          
         <input type="radio" name="sentido" value="ASC"  
         <?=empty($sentido) || $sentido=='ASC'? ' checked ' :'';?>>
        <label>ascedente</label>
        
         <input type="radio" name="sentido" value="DESC"  
         <?=!empty($sentido) && $sentido=='DESC'? ' checked ' :'';?>>
         <label>descedente</label>
         <input type="submit" name="buscar" value="Buscar">
      </form>
    </div>
    <div class="m-3">
      <a href="/socio/list">Quitar Filtros</a>
    </div>
      <table border='1' class="table table-striped">
         <thead >
              <tr>
                 <th scope="col">DNI</th>
                 <th scope="col">Nombre</th>
                 <th scope="col">Apellidos</th>
                 <th scope="col">Poblacio</th>
                   <th scope="col">telefono</th>
                 <th scope="col">Operaciones</th>
              </tr>
       </thead>
       </tbody>
      
      <?php 
      foreach($socios as $socio){
          
          echo "<tr>";
          echo "<td>";
          echo $socio->imagen ? "<img height='70' src='/$socio->imagen' alt='$socio->nombre'>" :
          "<img height='70' src='/img/socios/default.jpg' alt='$socio->nombre'>";
          echo "</td>";
            echo " <td>$socio->dni</td>";
            echo " <td>$socio->nombre</td>";
            echo " <td>$socio->apellidos</td>";
            echo "<td>$socio->poblacion</td>";
            echo "<td>$socio->telefono</td>";
            echo " <td>";
            echo " <a href='/socio/show/$socio->id'>ver</a>";
            echo " <a href='/socio/edit/$socio->id'>Actualizar</a>";
            echo " <a href='/socio/delete/$socio->id'>Borrar</a>";
            echo "</td>";
            echo "</tr>";
      }
      ?>
      </tbody>
 </table>
</div>
  </body>
  </html> 
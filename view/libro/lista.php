
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
<script type="text/javascript" src="../../js/activeClass.js"></script> 
<title>Biblioteca</title>
</head>
<body>
    <?php 
    (TEMPLATE)::login();
    (TEMPLATE)::nav("../../");
    ?>

      
     <div class="container">
       
       <h2>Lista de libros</h2>
      <div class="con text-white border p-4">
          <form method="post" action="/libro/buscar">
             
             <label>Camp:</label>
             
          <select name="campo">
             
                  <option value="titulo" <?=!empty($campo) && $campo=='titulo'? ' selected ' :'';?>>
                  
                  titulo</option>
                  
                  <option value="editorial" <?=!empty($campo) && $campo=='editorial'? ' selected ' :'';?>>
                  
                  Editorial</option>
                  
                  <option value="autor" <?=!empty($campo) && $campo=='autor'? ' selected ' :'';?>>
                  
                  Autor</option>
                  
             </select>
             
            <label>Valor:</label>
            
            <input type="text" name="valor" value=""<?=!empty($valor)? $valor : '';?>>
            
             <label>Orden:</label> 
             
              <select name="orden">
                 <option value="titulo" <?=!empty($orden) && $orden=='titulo'? ' selected ' :'';?>>
                  
                  titulo</option>
                  
                  <option value="editorial" <?=!empty($orden) && $orden=='editorial'? ' selected ' :'';?>>
                  
                  Editorial</option>
                  
                  <option value="autor" <?=!empty($orden) && $orden=='autor'? ' selected ' :'';?>>
                  
                  Autor</option>
              </select>
              
             <input type="radio" name="sentido" value="ASC"  
             <?=empty($sentido) || $sentido=='ASC'? ' checked ' :'';?>>
            <label>ascedente</label>
            
             <input type="radio" name="sentido" value="DESC"  
             <?=!empty($sentido) && $sentido=='DESC'? ' checked ' :'';?>>
             
             <input type="submit" name="buscar" value="Buscar">
          </form>
      </div>
      <a href="/libro/list">Quitar Filtros</a>
      
         <table border='1'  class="table table-striped">
              <tr>
                 <th scope="col">Imagen</th>
                 <th scope="col">Titulo</th>
                 <th scope="col">Autor</th>
                 <th scope="col">Editorial</th>
                 <th scope="col">Operaciones</th>
              </tr>
              
              
              <?php 
              foreach($libros as $libro){
                  
                  echo "<tr>";
                    echo "<td>";
                    echo $libro->imagen ? "<img height='50' src='/$libro->imagen' alt='$libro->titulo'>" :
                    "<img height='50' src='/img/libros/default.png' alt='$libro->titulo'>";
                    echo "</td>";
                    echo " <td>$libro->titulo</td>";
                    echo " <td>$libro->autor</td>";
                    echo " <td>$libro->editorial</td>";
                    echo " <td>";
                    echo " <a href='/libro/show/$libro->id'>ver</a>";
                    if(Login::isAdmin() || Login::hasPrivilege(500)){
                    echo " <a href='/libro/edit/$libro->id'>Actualizar</a>";
                    echo " <a href='/libro/delete/$libro->id'>Borrar</a>";
                    }
                    echo "</td>";
                    echo "</tr>";
              }
              ?>
         </table>
         
         <a href="/libro/exportJSON">Exportar a JSON</a>;
          <a href="/libro/exportJSON/1">Descargar a JSON</a>;
    </div>
     <?php 
     (TEMPLATE)::footer();
     
     ?> 
  </body>
 </html> 
   
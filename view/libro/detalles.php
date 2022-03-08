
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
    (TEMPLATE)::login();
    (TEMPLATE)::nav("../../");
    ?>
    <div class="container">
        <h2 class="me-3 text-info w-4">Detalles del libro</h2>
        <h3 class="m-3"><?=$libro->titulo?></h3>
        <figure class="p-3">
           <?php 
              echo $libro->imagen ? "<img height='100' src='/$libro->imagen' alt='$libro->titulo'>" :
                 "<img height='100' src='/img/libros/default.png' alt='$libro->titulo'>";
           
           
           ?>
        
        </figure>
        
        <p><b>ISBN : </b><?=$libro->isbn?></p>
        <p><b>Titol : </b><?=$libro->titulo?></p>
      
        <p><b>Editorial : </b><?=$libro->editorial?></p>
        <p><b>Autor : </b><?=$libro->autor?></p>
        <p><b>Idioma  : </b><?=$libro->idioma?></p>
        <p><b>Edition : </b><?=$libro->ediciones?></p>
        <p><b>Edad Recomendada : </b><?=$libro->edadrecomendada?></p>
        <h2>Ejemplares</h2>

          <?php 
          if($ejemplares){
              
              echo "<ul>";
              
              foreach($ejemplares as $e)
                  echo "<li>$e<a href='/ejemplar/delete/$e->id'>Borrar</a></li>";
              echo "</ul>";
              
          }else{
              
              
              echo "<p>No tenemos ejemplares de este libro.</p>";
          }
          
          
          ?>


       <a href='/libro/edit/<?=$libro->id ?>'>Edita libro</a>
       <a href='/libro/delete/<?=$libro->id ?>'>Borrar</a>
       <a href='/libro/list'>Lista de libros</a>
       <a href='/ejemplar/create/<?=$libro->id ?>'>Añadir ejemplar</a>
  </div>
   <?php 
     (TEMPLATE)::footer();
     
     ?> 
   </body>
   </html>
      
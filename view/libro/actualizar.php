
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

        <h2>Formulario de edition</h2>
        
        
        <?=empty($GLOBALS['mensaje'])? "" : "<p>".$GLOBALS['mensaje']."</p>"?>
        
        
        
        <form method="POST" action="/libro/update" enctype="multipart/form-data">
           
           <input type="hidden" name="id" value="<?=$libro->id?>">
           <label>ISBN</label>
           <input type="text" name="isbn" value="<?=$libro->isbn?>"><br>
           
           <label>TItulo</label>
           <input type="text" name="titulo" value="<?=$libro->titulo?>"><br>
           
           <figure>
              <figcaption>Imagen actual</figcaption>
              <?php 
              if(($libro->imagen)){
                  echo "<img height='100' src='/$libro->imagen' alt='$libro->titulo'><br>";
                  echo "<input type='checkbox' name='eleminarimagen' value='1'>";
                  echo "<label>Eleminar la imagen</label><br>";
              }else{
                  echo "<img height='100' src='/img/libros/default.png' alt='$libro->titulo'><br>";
              }
              
              ?>
           
           
           
           </figure>
           <label>Nueva imagen: </label>
           <input type="file" name="imagen" accept="image/*">
           <span>(no indicar si no se desea cambiar)</span><br>
           
            <label>Editorial</label>
           <input type="text" name="editorial" value="<?=$libro->editorial?>"><br>
           
           <label>Autor</label>
           <input type="text" name="autor" value="<?=$libro->autor?>"><br>
           
           <label>Idioma</label>
           <input type="text" name="idioma" value="<?=$libro->idioma?>"><br>
           
           <label>Ediciones</label>
           <input type="text" name="ediciones" value="<?=$libro->ediciones?>"><br>
         
           
            <label>Edad</label>
           <input type="number" min="0"  max="99"  name="edadrecomendada" value="<?=$libro->edadrecomendada?>"><br>
           
          
           
           <input type="submit" name="actualizar"  value="Actualizar"><br>
        
        </form>
        <a href="/libro/show/<?=$libro->id?>">Detalles</a>
        <a href="/libro">Volver al listado</a>
    </div>
     <?php 
     (TEMPLATE)::footer();
     
     ?> 
</body>
</html>
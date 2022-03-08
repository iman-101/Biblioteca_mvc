
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
        
        
        
        <form method="POST" action="/socio/update" enctype="multipart/form-data">
           
           <input type="hidden" name="id" value="<?=$socio->id?>">
           <label>DNI:</label>
           <input type="text" name="dni" value="<?=$socio->dni?>"><br>
           
           <label>Nombre:</label>
           <input type="text" name="nombre" value="<?=$socio->nombre?>"><br>
               <figure>
                      <figcaption>Imagen actual</figcaption>
                      <?php 
                      if(($socio->imagen)){
                          echo "<img height='100' src='/$socio->imagen' alt='$socio->titulo'><br>";
                          echo "<input type='checkbox' name='eleminarimagen' value='1'>";
                          echo "<label>Eleminar la imagen</label><br>";
                      }else{
                          echo "<img height='100' src='/img/socios/default.png' alt='$socio->nombre'><br>";
                      }
                      
                      ?>
                   
                   
                   
                   </figure>
                         <label>Nueva imagen: </label>
                   <input type="file" name="imagen" accept="image/*">
                   <span>(no indicar si no se desea cambiar)</span><br>
            <label>Apellidos:</label>
           <input type="text" name="apellidos" value="<?=$socio->apellidos?>"><br>
           
           <label>poblacion:</label>
           <input type="text" name="poblacion" value="<?=$socio->poblacion?>"><br>
           
           <label>Provincia:</label>
           <input type="text" name="provincia" value="<?=$socio->provincia?>"><br>
           
           <label>Codigo postal: </label>
           <input type="text" name="cp" value="<?=$socio->cp?>"><br>
         
           
            <label>Direccion: </label>
           <input type="text"  name="direccion" value="<?=$socio->direccion?>"><br>
            <label>Nacimiento: </label>
           <input type="date" name="nacimiento" value="<?=$socio->nacimiento?>"><br>
            <label>Telefono</label>
           <input type="number" name="telefono" value="<?=$socio->telefono?>"><br>
           
           <label>Email</label>
           <input type="email" name="email" value="<?=$socio->email?>"><br>
           
           <input type="submit" name="actualizar"  value="Actualizar"><br>
        
        </form>
        <a href="/socio/show/<?=$socio->id?>">Detalles</a>
        <a href="/socio">Volver al listado</a>
   </div>
</body>
</html>
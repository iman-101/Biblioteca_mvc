
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
        <h2>Nuevo libro</h2>
        
        <form method="POST" action="/libro/store" enctype="multipart/form-data">
           
           
           <label>ISBN</label>
           <input type="text" name="isbn"><br>
           
           <label>TItulo</label>
           <input type="text" name="titulo"><br>
           
             <label>Imagen</label>
           <input type="file" accept="image/*" name="imagen"><br>
           
            <label>Editorial</label>
           <input type="text" name="editorial"><br>
           
           <label>Autor</label>
           <input type="text" name="autor"><br>
           
           <label>Idioma</label>
           <input type="text" name="idioma"><br>
           
           <label>Ediciones</label>
           <input type="text" name="ediciones"><br>
         
           
            <label>Edad</label>
           <input type="number" min="0"  max="99"  name="edadrecomendada"><br>
           
          
           
           <input type="submit" name="guardar"  value="Guardar"><br>
        
        </form>
        
        <a href="/libro/list">Volver al listado</a>
     </div>
      <?php 
     (TEMPLATE)::footer();
     
     ?> 
</body>
</html>

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
        <h2>Nuevo ejemplar</h2>
        
        <p>Vas a crear un nuevo ejemplar del libro <b> <?=$libro->titulo?></b></p>
        
        
        <form method="post" action="/ejemplar/store">
        
             <input type="hidden" name="idlibro" value="<?=$libro->id?>"><br>
             
             <label>Año</label>
             <input type="number" name="anyo">
        
        
             <label>Edition</label>
             <input type="number" name="edicion">
             
            <label>Precio</label>
            <input type="number" step="0.01"name="precio">
            <input type="submit" name="guardar" value="Guardar">
        </form>
        
        <a href="/libro/show/<?=$libro->id?>">Volver a detalles de <?=$libro->titulo?></a>
    </div>
</body>
</html>
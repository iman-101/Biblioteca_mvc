
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
        <h2>Confirmar borrardo</h2>
        
        <p>Estas a punto de borrar el ejemplar <?=$ejemplar->id?>
          del libro <?=$libro->titulo;?>
        </p>
        
        
        <p>Se trata de un  ejemplo de la edicion numero<?=$ejemplar->edicion?>
          del año <?=$libro->id;?>,que ha costado
        </p>
        <form method="post" action="/ejemplar/destroy">
        
           <label>Por favor confirma el borrado</label>
           
           <input type="hidden" name="id" value="<?=$ejemplar->id?>">
            <input type="hidden" name="idlibro" value="<?=$ejemplar->idlibro?>">
            
             <input type="submit" name="borrar" value="Borrar">
        </form>
        <br>
        <a href="/libro/show/<?=$libro->id?>">Volver a detalles del libro <?=$libro->titulo;?></a>
    </div>
</body>
</html>
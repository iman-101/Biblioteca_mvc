
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
            <h2>Confirmar borrardo</h2>
            
            <p>Estas a punto de borrar el prestamo <?=$prestamo->id?>
              del socio <?=$socio->id;?>
            </p>
            
            
            <form method="post" action="/prestamo/destroy">
            
               <label>Por favor confirma el borrado</label>
               
               <input type="hidden" name="id" value="<?=$prestamo->id?>">
                <input type="hidden" name="idsocio" value="<?=$prestamo->idsocio?>">
                
                 <input type="submit" name="borrar" value="Borrar">
            </form>
            <br>
            <a href="/socio/show/<?=$socio->id?>">Volver a detalles del socio <?=$socio->id;?></a>
   </div>
</body>
</html>
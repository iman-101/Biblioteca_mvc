
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
        <form method="POST" action="/prestamo/update">
           
           <input type="hidden" name="id" value="<?=$prestamo->id?>">
           <input type="hidden" name="idsocio" value="<?=$prestamo->idsocio?>">
           <input type="hidden" name="idejemplar" value="<?=$prestamo->idejemplar?>">
           
          <input type="hidden" name="idejemplar" value="<?=$prestamo->limite?>">
           
         
        
           <!--   <label>Prolongar la devolucion de limite <?=$prestamo->limite?>: </label>
            
                  <select name="limite">
                      <option value="1">1 day</option>
                      <option value="2">2 day</option>
                      <option value="3">3 day</option>
                      <option value="4">4 day</option>
                      <option value="5">5 day</option>
                      <option value="6">6 day</option>
                  </select>-->
           
            
           
           <input type="submit" name="actualizar"  value="Confirmar"><br>
        
        </form>
        <a href="/socio/show/<?=$prestamo->idsocio?>">Detalles</a>
        <a href="/socio">Volver al listado</a>
     </div>
</body>
</html>
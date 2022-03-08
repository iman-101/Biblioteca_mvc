
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
        <h2>Nuevo prestamo</h2>
        
        <p>Vas a crear un nuevo  prestamo del socio :<b> <?=$socio->nombre?></b></p>
        
        
        <form method="post" action="/prestamo/store">
        
             <input type="hidden" name="idsocio" value="<?=$socio->id?>"><br>
              <select name="campo">
                   <?php 
                   foreach($ejemplares as $ejemplar){?>
                       <option value="<?=$ejemplar->id?>" <?=!empty($campo) && $campo=="$ejemplar->id"? ' selected ' :'';?>>
                        
                      ejemplar<?=$ejemplar->id?>
                      </option>
                      
                  <?php  }
                   ?>
                     
                   
                   
                      
                 </select>
                 
           
            <p><b>limite de este prestamo: </b><?php 
              $treeday=time()+(24*3*60*60);
              $limite= date('Y-m-d H:i:s',$treeday);
              echo $limite;
              
            ?></p>
             
                <input type="hidden" name="limite" value="<?=$limite?>"><br>
            
            <input type="submit" name="guardar" value="Guardar">
        </form>
        
        <a href="/socio/show/<?=$socio->id?>">Volver a detalles de <?=$socio->nombre?></a>
      </div>  
</body>
</html>
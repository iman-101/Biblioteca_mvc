
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
     <script type="text/javascript" src="../js/activeClass.js"></script>   


<title>Biblioteca</title>
</head>
<body>
    <?php 
    (TEMPLATE)::login();
    (TEMPLATE)::nav("../../");
    ?>

   <div class="container">
        <h2 class="font-weight-bold">Nuevo socio</h2>
        
        <form method="POST" action="/socio/store">
           
           
           <label>DNI</label>
           <input type="text" name="dni"><br>
           
           <label>Nombre</label>
           <input type="text" name="nombre"><br>
           
            <label>Apellidos</label>
           <input type="text" name="apellidos"><br>
           
           <label>Poblacion</label>
           <input type="text" name="poblacion"><br>
           
           <label>codigo postal</label>
           <input type="text" name="cp"><br>
           
           <label>Provincia</label>
           <input type="text" name="provincia"><br>
          <label>Direccion</label>
           <input type="text" name="direccion"><br>
           
            <label>Email</label>
           <input type="email"   name="email"><br>
           
         
               <label>Telefono:</label>
           <input type="number" name="telefono"><br>
               <label>Nacimiento</label>
           <input type="date"  name="nacimiento"><br>
           
           <input type="submit" name="guardar"  value="Guardar"><br>
        
        </form>
        
        <a href="/socio/list">Volver al listado</a>
     </div>   
</body>
</html>
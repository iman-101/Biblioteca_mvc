
<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!--font awsome-->
<link rel="stylesheet" type="text/css" href="mypro/css/all.min.css">
<!--jquery-->
<script type="text/javascript" src="js/jquery.js"></script>
<!--bootstrap js-->
<script src="js/bootstrap.min.js"></script>
<!--my style-->
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="js/myscript.js"></script>

<title>Biblioteca</title>
</head>
<body>
 <?php 
    (TEMPLATE)::login();
    (TEMPLATE)::nav("");
    ?>
     <h2>Recuperar clave</h2>
     
     <form method="post" action="/forgotpassword/send">
         <label>Usuario</label>
         <input type="text" name="usuario" required>
         <br>
         <label>Email</label>
         <input type="email" name="email" required>
         <input type="submit" name="generar" value="Generar nueva clave">
     </form>
     

</body>

</html>
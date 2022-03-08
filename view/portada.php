
<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<!--font awsome-->
<link rel="stylesheet" type="text/css" href="../mypro/css/all.min.css">
<!--jquery-->
<script type="text/javascript" src="../js/jquery.js"></script>
<!--bootstrap js-->
<script src="../js/bootstrap.min.js"></script>
<!--my style-->
<link rel="stylesheet" type="text/css" href="../css/style.css">

       
<script type="text/javascript" src="js/activeClass.js"></script>  


<title>Biblioteca</title>
<script src="https://www.google.com/recaptcha/api.js?h1=ca"></script>
</head>
<body>
    <?php 
    (TEMPLATE)::login();
    (TEMPLATE)::nav("../");
    ?>
     <div class="container-fluid position-relative main-foto">
    	<div class="position-absolute  top-0 start-0 h-100 shad">
    		
    	</div>
        <h1 class="position-absolute top-50 start-50 translate-middle text-white fs-1 fw-bold  titulo">Bienvenido a nuestra biblioteca</h1>
    </div>
   
      
     <?php 
     (TEMPLATE)::footer();
     
     ?> 

    
    </body>
</html>

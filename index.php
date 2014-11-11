<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>App Send File...</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/stylus.css">
</head>
<body>

<div class="container">
	<br>
   <div class="row">
		<div class="col-md-6 col-md-offset-3">
			
			<div class="well">
			     <?php
                      include 'include/funcion.php';

                      if (ObtenerIP() == '127.0.0.1') {
                      	  include 'include/main.php';
                          include 'include/inicioFormulario.php';
                          VerFormulario(true);
                      }
                      else{

                      	include 'include/main.php';
                        include 'include/inicioFormulario.php';
                        VerFormulario(false);
                      }
                      
                           
			     ?>
			     
   		    </div>
   		</div>
	</div>
</div>

<script src="js/codigo.js"></script> 
	
</body>
</html>
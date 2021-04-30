<!DOCTYPE html>
<html lang="es">
<html>
<head>
	<title>GTI | Iniciar Sesión</title>
	<link rel="stylesheet" type="text/css" href="css/iniciosesion.css">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,shrink-to-fit=no,initial-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" href="css/estilo-header+footer.css">

</head>
<body>
<?php include_once 'header.php'?>
<!-- Imagen de la ola morada de versión escritorio -->
	<img class="wave" src="img/wave.png">
	<div class="container">

		<div class="img">
			<!-- Imagen árboles versión escritorio -->
			<img src="img/bg.svg">
		</div>
		<!-- Apartado de login -->
		<div class="login-content">

			<!-- Formulario de login -->
			<form method="post">

				<!-- Imagen GTI  y texto para login-->
<!--				<a href="index.php" class="logo"><img src="img/logoGTI.svg"></a>-->
                <h1>Iniciar Sesión</h1>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Nombre de Usuario</h5>
           		   		<input name="username" type="text" class="input" required>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Contraseña</h5>
           		    	<input name="password" type="password" class="input" required>
            	   </div>
            	</div>
            	<a href="#">¿Has olvidado tu contraseña?</a>
                <div id="output"></div>
            	<input type="submit" class="btn" value="Iniciar Sesión" >

            </form>
            <script src="js/login.js"></script>
			<!-- Fin de formulario para login -->
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
	<?php include 'footer.php' ?>
</body>
</html>

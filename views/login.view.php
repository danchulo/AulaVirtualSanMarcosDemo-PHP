<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA; ?>diseño/diseñoLogin.css">
</head>
<body>
	<section>
	  <div class="layer"></div>
	  <div class="container">
	    <div class="login-form">
				<h1>Login</h1>
				<?php if(isset($mensaje)){
				echo $mensaje;	}
				?>
				<br>
				<br>
	      <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" >
	        <input type="text" name="correo" placeholder="correo" required>
	        <input type="password" name="password" placeholder="password" required>
	        <input type="submit" name="" value="Iniciar Sesion">
	      </form>
	    </div>
	  </div>
	</section>
</body>
</html>
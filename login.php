<?php include_once('servidor.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/login.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body style="background: url(https://i.pinimg.com/736x/8d/d9/b0/8dd9b0aecfa1aae751e0b0873070e0ac--data-conversion-data-processing.jpg)no-repeat;background-size:cover">


  <div class="header">
  <h1 class="animate__animated animate__backInLeft">Sistema de login</h1>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errores.php'); ?>
  	<div class="input-group">
  		<label>Usuario</label><input type="text" placeholder="ingrese su nombre" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Contraseña</label><input type="password"  placeholder="ingrese su contraseña" name="password">
  	</div>
  		<button type="submit" class="btn" name="login_user" align="right">Login</button>  
	<div class="input-group">
  	<p>
  		No tienes una cuenta.. <a href="registro.php">Registrate</a>
  	</p>
	  </div>
  </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>

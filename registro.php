<?php include('servidor.php') ?>
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
	
  <form method="post" action="registro.php">
  	<?php include('errores.php'); ?>
  	<div class="input-group">
  	  <label>Nombres</label>
  	  <input type="text" name="fullname" value="<?php echo $fullname; ?>">
  	</div>
    <div class="input-group">
    <label>Usuario</label>
    <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
  	<div class="input-group">
  	  <label>Correo</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Contraseña</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirme contraseña</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Registrarse</button>
  	</div>
  	<p>
  		¿Ya eres miembro? <a href="login.php">Accede</a>
  	</p>
  </form>
</body>
</html>

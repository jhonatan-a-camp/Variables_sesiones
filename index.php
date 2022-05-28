<?php
  session_start(); 
  if (!isset($_SESSION['fullname'])) {
  	$_SESSION['msg'] = "Primero debes iniciar sesion";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['fullname']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Avanzado</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background: url(https://i.pinimg.com/736x/8d/d9/b0/8dd9b0aecfa1aae751e0b0873070e0ac--data-conversion-data-processing.jpg)no-repeat;background-size:cover">


<div class="header">
	<h2>Bienvenido</h2>
</div>
<div class="content">
  	<!-- aviso -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logueado -->
    <?php  if (isset($_SESSION['fullname'])) : ?>
    	<p>Bienvenido <strong><?php echo $_SESSION['fullname']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">Salir</a> </p>
    <?php endif ?>
</div>

</body>
</html>
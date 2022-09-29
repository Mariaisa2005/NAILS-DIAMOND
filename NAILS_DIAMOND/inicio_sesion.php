<?php 
	session_start();

	if (isset($_SESSION['nombre'])) {
		// code...
	}else{
		header("location:login.php");
		exit();
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title>Bienvenido</title>
</head>
<body>

	<header>
			<nav class="nav">
				<ul><li><a href="#">Medic Help</a></li></ul>
			</nav>
			<nav class="navbar">
			<ul>
			    <li><a href="#">Inicio</a></li>  
			    <li><a href="#">Ver empleados</a></li>
			    <li><a href="#">Servicio</a></li>
			    <li><a href="#">Perfil</a></li>
			  </ul>
			</nav>
	</header>

	<h1>Bienvenid(a), <?php echo $_SESSION['nombre'];?><br>
	<h2>Usuario</h2>
	<?php
	echo $_SESSION['usuario'];
	echo "<br>";
	echo "Es usuario";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	?>
	</h1>

	<a href="cambiar_password.php">Cambiar contraseña</a><br><br>
	<a href="cerrar_sesion.php">Cerrar sesion</a>
	
</body>
</html>
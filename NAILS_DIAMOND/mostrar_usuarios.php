<?php
	include "conexion.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/estilo3.css">
    
   
	<title>Mostrar usuarios</title>
</head>
<body>
	<header data-aos="fade-down">
        <div class="container">
            <div class="header">
                <div class="header__logo"><img src="imagenes/logo.jpg" width="45" class="imag">Nails Diamond</div>
                <div class="header__right">
                    <ul class="nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="registrar.php">Resgistrar</a></li>
                        <li><a href="inicio_sesion.php">Iniciar Sesion</a></li>
                        <li><a href="mostrar_usuarios.php">Servicios</a></li>
                        <li><a href="contacto.php">Contacto</a></li>
                    </ul>
                    <div class="user-menu">
                        <i class='bx bx-cart-alt'></i>
                        <span class="menu-toggle">
                            <i class='bx bx-menu-alt-right'></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
	<nav>
		<h1>Servicios</h1>
	</nav>

<h1 align="center"> Ofrecemos los siguientes servicios</h1>

	<div class="main.container" align="center">
		<table class="table">
			<thead>
				<tr>
					<th>ID_servicio</th>
					<th>Nombre de Servicio</th>
					<th>Precio</th>
					
				
				</tr>
			</thead>

			<?php
			$consulta="SELECT * FROM tiposervicio";
			$resultado=mysqli_query($conexion, $consulta);

			while ($mostrar = mysqli_fetch_array($resultado)) {
				?>
			<tr>
			    <td> <?php echo $mostrar['id_tiposervicio']; ?></td>
				<td> <?php echo $mostrar['servicios']; ?></td>
				<td> <?php echo $mostrar['precio']; ?></td>
				
				
				
			</tr>
			<?php
			}
			?>
		</table>
	</div>

	<footer>
		<h3 align="center">Nails Diamond</h3>
	</footer>
</body>
</html>
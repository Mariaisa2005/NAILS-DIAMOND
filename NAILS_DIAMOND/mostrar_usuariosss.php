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
	<nav>
		<footer><h2>Mostrar registro de usuario</h2></footer>
	</nav>

	<div class="main.container" align="center">
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Usuario</th>
					<th>Correo</th>
					<th>Password</th>
					<th>Tipo de usuario</th>
					<th colspan="2">Botones de accion</th>
				</tr>
			</thead>

			<?php
			$consulta="SELECT * FROM usuarios";
			$resultado=mysqli_query($conexion, $consulta);

			while ($mostrar = mysqli_fetch_array($resultado)) {
				?>
			<tr>
				<td> <?php echo $mostrar['id']; ?></td>
				<td> <?php echo $mostrar['nombre']; ?></td>
				<td> <?php echo $mostrar['apellidos']; ?></td>
				<td> <?php echo $mostrar['usuario']; ?></td>
				<td> <?php echo $mostrar['correo']; ?></td>
				<td> <?php echo $mostrar['password']; ?></td>
				<td> <?php echo $mostrar['tipo_user']; ?></td>

				<td><a href="modificar.php?edit=<?php echo $mostrar['id']?>" class="edit_btn">Actualizar</a></td>
				<td><a href="eliminar.php?del=<?php echo $mostrar['id']?>" class="del_btn">Eliminar</a></td>
			</tr>
			<?php
			}
			?>
		</table>
	</div>
</body>
</html>
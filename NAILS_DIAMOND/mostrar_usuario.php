<?php
include"conexion.php"



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
	<footer><h2> MOSTRAR REGISTRO DE USUARIOS </h2></footer>
</nav>
<div class="main.container" align="center"> </div>
<div class="main.container">
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>NOMBRES</th>
				<th>APELLIDOS</th>
				<th>USUARIO</th>
				<th>CORREO</th>
				<th>PASSWORD</th>
				<th>CORREO</th>
			</tr>
		</thead>
<?php 
$consulta = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexion,$consulta);

while ($mostrar = mysqli_fetch_array($resultado))
 {
	?>	

<tr>
	<td> <?php echo $mostrar['id']; ?></td>
	<td> <?php echo $mostrar['nombre']; ?></td>
	<td> <?php echo $mostrar['apellidos']; ?></td>
	<td> <?php echo $mostrar['usuario']; ?></td>
	<td> <?php echo $mostrar['correo']; ?></td>
	<td> <?php echo $mostrar['password']; ?></td>
	<td> <?php echo $mostrar['tipo_user']; ?></td>
</tr>
<?php  
}
?>




	</table>
	
</div>
</body>
</html>
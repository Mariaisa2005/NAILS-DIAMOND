<?php
	include "conexion.php";

$codigo = $_POST['codigo'];

mysqli_query($conexion,"UPDATE usuarios SET,Nombre de Servicio='$_POST[Nombre de Servicio]',Precio='$_POST[Precio]',Imagen='$_POST[Imagen]', ;

if (mysqli_num_rows($conexion) > 0) {
	echo '<script>
	      alert("El correo ya se encuentra registrado");
	      window.history.go(-1);
	      </script>';
	      exit();

}


header("location:mostrar_usuarios.php");
?>
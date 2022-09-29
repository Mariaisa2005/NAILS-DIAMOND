<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		 function comprobarClave(){
		 	clave1 = document.f1.clave1.value
		 	clave2 = document.f1.clave2.value

		 	if (clave1 == clave2)
		 		alert(" La contraseña se cambio con exito")

		 	else
		 		alert("Las dos claves son distintas...vuelva a intentarlo")
		 }      exit(); 

	</script>
	<link rel="stylesheet" type="text/css" href="css/estilo5.css">
</head>
<body>
<div class="formulario_registro">
	<div class="form">
     <form method="post" action="cambiarpass.php" name="f1">
	<label> Nueva Contraseña: </label>
    <input type="password" name="clave1">
    <label> Repita la contraseña: </label> 
    <input type="password" name="clave2">
    <input type="submit" value="cambiar" onClick="comprobarClave()" class="btn-green">
</div>
</div>
</form>
</body>
</html>
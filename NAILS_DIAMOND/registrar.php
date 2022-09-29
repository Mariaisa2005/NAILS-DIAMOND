<!DOCTYPE html>
<html lang="es">
<head>
	<title> Registro cliente</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo2.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="short icon"  href="imagenes/logo.jpg"> 
	 <style type="text/css">
            .imag{
              position: absolute;
              left: 500px;
              top: 110px;

            }

      </style>
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
<div class="formulario_registro">
	<div class="form">
				
		<h1 class="color">REGISTRO CLIENTE </h1>
	   <form method="post" action="login.php">
	   	<img src="imagenes/logo.jpg" width="45" class="imag">

	   	<p>
	   	Nombre 	
	   	<input type="text" name="nombre" placeholder="Nombre" class="field">	
	   	</p>
	   	<p>
	   	Apellidos
	   	<input type="text" name="apellido" placeholder="Apellidos" class="field">	
	   	</p>
	   	<p>
	   	Usuario 
	   	<input type="text" name="usuario" placeholder="Usuario" class="field">	
	   	</p>
	   	<p>
	   	Correo
	   	<input type="email" name="correo" placeholder="Correo" class="field">	
	   	</p>
	   	<p>
	   	Contraseña
	   	<input type="password" name="pass" placeholder="Contraseña" class="field">	
	   	</p>
	   	<br>
	   	<input type="submit" name="" value="Registrar" class="btn-green"> <br>
	   	<center><a href="login.php"> Inicio sesion </b></a></center>
	   </form>
       <br>
       
  </div>
</div>


</body>
</html>
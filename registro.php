<?php
require 'crud.php';
?>

<!DOCTYPE html>
<html>

<head>
	<!-- Para que el texto pueda leer símbolos como la ñ y los acentos-->				
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
			
	<meta name="description" content="Primer Proyecto de Programación Web">
	<meta name="keywords" content="Universidad">
										
	<title>Registro</title>
					
	<!-- Icono de Favicon -->
	<link rel="shortcut icon" type="image/ico" href="/img/favicon.ico"/>
					
	<!-- Hoja de estilos -->
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
	<br/>

	<!-- Menú -->
	<header>
		<div id="menu">
			<ul>
					<a href="index.html"> Index </a>
					<a href="login.html"> Log In </a>
					<a href="registro.html"> Register </a>
			</ul>
		</div>
	</header>
	
	<br/>
	<br/>

	<h1>Formulario de Registro</h1>

	 <form class="form-register" action="crud.php" method="post"> 
	 	<h2 class="form_titulo">
			Registro de cuenta
		</h2>

		<div class="contenedor-inputs">
			<input type="email" id="correo" name="correo" placeholder="Correo" class="input-100">
			<input type="password" id="pass1" name="pass1" placeholder="Contraseña" class="input-48">
			<input type="password" id="pass2" name="pass2" placeholder="Repite Contraseña" class="input-48">

			<input type="submit" value="click" class="btn-enviar" onclick= "validar();" name="submitRegistro">
			<p class="form_link">¿Ya tienes una cuenta? <a href=login.html> Ingresa aqui</a></p>
		</div>
	</form>

	<br/>
	<br/>

	<footer>
		<div id="franja">
			<p>MySpaceIn © - 2018.</p>
		</div>
	</footer>
	
</body>
</html>
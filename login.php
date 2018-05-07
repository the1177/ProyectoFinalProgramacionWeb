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
			
	<title>Login</title>
			
	<!-- Icono de Favicon -->
	<link rel="shortcut icon" type="image/ico" href="/img/favicon.ico"/>
			
	<!-- Hoja de estilos -->
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
	<br/>
	<header>
		<div id="menu">
			<ul>
				<a href="index.html"> Index </a>
				<a href="login.php"> Log In </a>
				<a href="registro.php"> Register </a>
			</ul>
		</div>
	</header>
	<br/>
	<br/>

	<h1>Log In</h1>
	 <form class="form-register" action="/php/inicio_sesion.php" method="post"> 
		<h2 class="form_titulo">
			Inicio de sesión
		</h2>

		<div class="contenedor-inputs">
			<input type="text" id="correo" name="correo" placeholder="Correo" class="input-100">
			<input type="password" id="password" name="password" placeholder="Contraseña" class="input-100">
			
			<input type="submit" value="Acceder" class="btn-enviar" name="submitLogin">

			<br/><br/>
			<p class="form_link">¿Aún no tienes una cuenta? <a href=registro.php> Regístrate aqui</a></p>
		</div>
	</form>

	<br/>
	<br/>
	<br/>
	<br/>

	<footer>
		<div id="franja">
			<p id="textoFooter">MySpaceIn © - 2018. </p>
		</div>
	</footer>

</body>
</html>
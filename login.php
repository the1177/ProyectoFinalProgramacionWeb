<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><!-- Para que el texto pueda leer símbolos como la ñ y los acentos-->
	<meta name="description" content=" Primer Proyecto de Programación Web">
	<meta name="keywords" content="Universidad">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">

</head>

<body>


	<br></br>

	<header>
		<div id="menu">
			<ul> <!-- Agregar etiqueta li -->
					<a href="index.php"> Index </a>
					<a href="login.php"> Log In </a>
					<a href="registro.php"> Register </a>
			</ul>
		</div>
	</header>
	
	<br></br>
	<br></br>

	<h1>Log In</h1>

	 <form action="php/inicio_sesion.php" method="post" class="form-register"> 
	<!--<form class="form-register"> !-->
		<h2 class="form_titulo">
			Inicio Sesion
		</h2>

		<div class="contenedor-inputs">
			<input type="email" id="correo" name="correo" placeholder="correo" class="input-100">
			<input type="password" id="password" name="password" placeholder="password" class="input-100">
			<input type="submit" value="Acceder" class="btn-enviar">
		</div>

	</form>

	<footer>
		<p></p>
	</footer>
	
</body>
</html>
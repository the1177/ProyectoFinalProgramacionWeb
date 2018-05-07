<?php
include("auth.php");
?>

<!DOCTYPE html>
<html>

<head>
	<!-- Para que el texto pueda leer símbolos como la ñ y los acentos-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	
	<meta name="description" content="Primer Proyecto de Programación Web">
	<meta name="keywords" content="Universidad">
			
	<title>Blog</title>
			
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
				<a href="blog.php"> Inicio </a>
				<a href="perfil.php"> Perfil </a>
				<a href="publi.php"> Publicaciones </a>
				<a href="logout.php"> Log Out </a>
			</ul>
		</div>
	</header>

	<div id = "centro">
		<h1> Bienvenido  <?php echo $_SESSION['username']; ?> </h1>
		<br/>
		<br/>
		<br/>
		<br/>
	</div>


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

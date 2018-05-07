

<?php

	#include("php/new_pub.php");

	session_start();
	$sesion_actual= $_SESSION['id'];

	if(!($sesion_actual)){
		header('location: index.php');
		die();	
	}

	require 'php/conexion.php';
				
	if(!$conexion ) {
		die('Could not connect: ' . mysqli_error());
	}

	#echo 'Connected successfully'."<br>";

	$id = $_SESSION['id']; #Modificar para que sea el id del usuario que tenga la sesion iniciada

	$sql = "SELECT publicacion FROM publicaciones WHERE id_usuario='".$sesion_actual."'";

	$result = mysqli_query($conexion, $sql);
?>


<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><!-- Para que el texto pueda leer símbolos como la ñ y los acentos-->
	<meta name="description" content=" Primer Proyecto de Programación Web">
	<meta name="keywords" content="Universidad">
	<title>CEJ</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	
</head>

<body>

	<br></br>

	<header>
		<div id="menu">
			<ul> <!-- Agregar etiqueta li -->
				<a href="blog.php"> Inicio </a>
				<a href="perfil.php"> Perfil </a>
				<a href="publi.php"> Publicaciones </a>
				<a href="logout.php"> Log Out </a>
			</ul>
		</div>
	</header>

	<div id = "centro">

		<form method="post" action="php/new_pub.php" class="form-register"> 
			<h2 class="form_titulo">
				Nueva Publicacion
			</h2>

			<div class="contenedor-inputs">
				<input type="text" id="pub" name="pub" placeholder="Publicacion" class="input-100">
				<input type="submit" value="Publish" class="btn-enviar" >
			</div>

		</form>

		<h1> Publicaciones </h1>
		<br></br>

	<!--	!-->
	<table width="70%" border="1px" align="center">

		<?php 
			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
		?>
		
		<tr>
			<td><?php echo $row["publicacion"]?></td>
		</tr>
		<?php   
				}
			}
		?>
	</table>
		
		
	</div>

</body>

</html>
<?php
    include("auth.php");
	require 'php/conexion.php';
				
	if(!$conexion ) {
		die('Could not connect: ' . mysqli_error());
	}

	$id = $_SESSION['id']; #Modificar para que sea el id del usuario que tenga la sesion iniciada

	$sql = "SELECT publicacion FROM publicaciones WHERE id_usuario='".$id."'";

	$result = mysqli_query($conexion, $sql);
?>


<!DOCTYPE html>
<html>


<head>
	<!-- Para que el texto pueda leer símbolos como la ñ y los acentos-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	
	<meta name="description" content="Primer Proyecto de Programación Web">
	<meta name="keywords" content="Universidad">
			
	<title>Publicaciones</title>
			
	<!-- Icono de Favicon -->
	<link rel="shortcut icon" type="image/ico" href="/img/favicon.ico"/>
			
	<!-- Hoja de estilos -->
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>

	<br/>

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
		<form action="php/new_pub.php" method="post" class="form-register"> 
			<h2 class="form_titulo">
				Nueva Publicacion
			</h2>

			<div class="contenedor-inputs">
				<input type="text" id="pub" name="pub" placeholder="Publicacion" class="input-100">
				<input type="submit" value="Publish" class="btn-enviar" onclick= "validar();">
			</div>
		</form>

		<h1> Publicaciones </h1>
		<br/>

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
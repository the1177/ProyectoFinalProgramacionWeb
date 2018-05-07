<?php
    include("auth.php");
    require "php/crudPerfil.php";
    require "php/conexion.php";

    // Debugger
    ini_set('display_errors', 1);

    $correoId = $_SESSION['correo'];

    $consulta = ("SELECT * FROM info WHERE correo='$correoId' ");
    
    $result= $conexion->query($consulta);
    
    $grial = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html>

<head>
	<!-- Para que el texto pueda leer símbolos como la ñ y los acentos-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	
	<meta name="description" content="Primer Proyecto de Programación Web">
	<meta name="keywords" content="Universidad">
			
	<title>Perfil</title>
			
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

	<div id ="centro" class="perfil">
		<h1 class="form_titulo"> Bienvenido  <?php echo $_SESSION['username']; ?> </h1>
        <br/>
        <h1> Tu perfil </h1>
        <br/>
        
        <h3> Nombre; <?php echo $grial['nombre']; ?> <h3>
        <br/>
        
        <h3> Apellidos; <?php echo $grial['apellidos']; ?> <h3>
        <br/>
        
        <h3> Fecha de registro; <?php echo $grial['fechaRegistro']; ?> <h3>
        <br/>
        
        <h3> Ciudad; <?php echo $grial['ciudad']; ?> <h3>
        <br/>
        
        <h3> Pais; <?php echo $grial['pais']; ?> <h3>
        <br/>
        
        <h3> Idioma; <?php echo $grial['idioma']; ?> <h3>
        <br/>
        
        <h3> Facebook; <?php echo $grial['facebook']; ?> <h3>
        <br/>
        
        <h3> Twitter; <?php echo $grial['twitter']; ?> <h3>
        <br/>

        <h3> GitHub; <?php echo $grial['github']; ?> <h3>
		<br/>
        
		<br/>
	</div>


    <h2> Para editar tu información, haz click <a href="editaPerfil.php"> aquí. </a><h2>

	<br/>
	<br/>
	<br/>
	<br/>

	<footer>
		<div id="franja">
			<p id="textoFooter">MySpaceIn © - 2018.</p>
		</div>
	</footer>

</body>

</html>

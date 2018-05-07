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
        <h1> Editar tu perfil </h1>
        <br/>
    <form class="form-register" action="/php/crudPerfil.php" method="post">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php echo $grial['nombre']; ?>" />
        <br/>
        <label>Apellido</label>
        <input type="text" name="apellido" value="<?php echo $grial['apellido']; ?>" />
        <br/>
        <label>Fecha Registro</label>
        <input type="date" name="fechaRegistro" value="<?php echo $grial['fechaRegistro']; ?>" />
        <br/>
        <label>Ciudad</label>
        <input type="text" name="ciudad" value="<?php echo $grial['ciudad']; ?>" />
        <br/>
        <label>Pais</label>
        <input type="text" name="pais" value="<?php echo $grial['pais']; ?>" />
        <br/>
        <label>Idioma</label>
        <input type="text" name="idioma" value="<?php echo $grial['idioma']; ?>" />
        <br/>
        <label>Facebook</label>
        <input type="text" name="facebook" value="<?php echo $grial['facebook']; ?>" />
        <br/>
        <label>Twitter</label>
        <input type="text" name="twitter" value="<?php echo $grial['twitter']; ?>" />
        <br/>
        <label>Github</label>
        <input type="text" name="github" value="<?php echo $grial['github']; ?>" />
		<br/>
        <br/>

        <input type="submit" value="Actualizar perfil" class="btn-enviar" name="submitActualizar">
        
    </form>        
    </div>
    


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

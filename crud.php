<?php

$server = "localhost:3306";
$username = "arsdiffu_adminWB";
$password = "adminadminadmin";
$DB = "arsdiffu_WebDB";

$conexion = mysql_connect("localhost", $username, $password);
$db_selected = mysql_select_db($DB, $conexion);

## ---------------------------------- Funciones ----------------------------------------------------- ##
function insert($conexion){

	$conexion = mysql_connect("localhost", $username, $password);
	$db_selected = mysql_select_db($DB, $conexion);

	$tabla = "usuarios";

	$nombre = strip_tags($_POST['nombre']);
	$correo = strip_tags($_POST['correo']);
	$clave = strip_tags($_POST['pass1']);
	$clave2 = strip_tags($_POST['pass2']);

	echo(" $correo, $clave, $clave2 ");

	#Hacer consulta de todos los que tenga ese correo
	$consulta = "SELECT * FROM users WHERE correo='$correo' ";

	echo($consulta);

	$ans = mysql_query($consulta);

	# Si la consulta es 0 es que no hay registros con ese correo
	# en ése caso, procedemos a guardar el registro.
	if($ans === 0){
		if ($clave==$clave2){

			# Cifrar contraseña
			$clave3 = MD5($clave);

			$insert = "INSERT INTO usuarios(correo,pass, nombre) VALUES ('$correo','$clave3', $nombre)";
			
			echo("tetaaaaaaaaas $insert");

			# Guardar en BD
			$resultado = mysql_query($insert);

			if($resultado === TRUE){
				$conexion->close();
				header('location: login.html');
			}
			else{
				$conexion->close();
				alert ("Ocurrió un error, vuelve a intentarlo.");
				die();
			}
		}
		else{
			$conexion->close();
			header('location: registro.html');
		}
	}
	# Si encontró registro con ése correo, no se puede registrar
	else{
		echo("YA EXISTE PERRRRRRRRRROOOOOOOOOOOOO");
		$conexion->close();
		alert ("Ya existe un registro con ése correo.");
		die();
	}
}


## --------------------------------------------------------------------------------------------------------- ##


## ----------------------------------- Llamadas ------------------------------------------------------------ ##

if(isset($_POST['submitRegistro']))
{
	insert($conexion);
} 

?>
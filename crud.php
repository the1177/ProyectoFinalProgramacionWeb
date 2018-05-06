<?php

$server = "localhost";
$username = "arsdiffu_adminWB";
$password = "adminadminadmin";
$DB = "arsdiffu_WebDB";

$conexion = new mtsqli($server, $username, $password, $DB);

if($conexion){
	return $conexion;
}
else{
	die();
}

## ---------------------------------- Funciones ----------------------------------------------------- ##
function insert($conexion){

	$tabla = "usuarios";
	$correo = $_POST["correo"];
	$clave = $_POST["pass1"];
	$clave2 = $_POST["pass2"];

	#Hacer consulta de todos los que tenga ese correo
	$consulta = "SELECT * FROM '$tabla' WHERE correo='$correo' ";

	$ans = $conexion->query($consulta);

	# Validar consulta
	if(!$ans){
		$conexion->close();
		die();
	}

	# Si la consulta es 0 es que no hay registros con ese correo
	# en ése caso, procedemos a guardar el registro.
	if($ans->num_rows === 0){
		if ($clave==$clave2){

			# Cifrar contraseña
			$clave3 = MD5($clave);

			$insert = "INSERT INTO " . $tabla . " (correo, password) VALUES('$correo', '$clave3');";
			
			# Guardar en BD
			$resultado = $conexion->query($insert);

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
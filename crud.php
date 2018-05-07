<?php

// Debugger
//ini_set('display_errors', 1);

## ---------------------------------- Funciones ----------------------------------------------------- ##
function insert(){

	$server = "localhost";
	$username = "arsdiffu_adminWB";
	$password = "adminadminadmin";
	$DB = "arsdiffu_WebDB";

	$conexion = mysql_connect('localhost', $username, $password);
	$db_selected = mysql_select_db('arsdiffu_WebDB', $conexion);

	$tabla = "usuarios";

	$nombre = strip_tags($_POST['nombre']);
	$correo = strip_tags($_POST['correo']);
	$clave = strip_tags($_POST['pass1']);
	$clave2 = strip_tags($_POST['pass2']);

	//echo(" $correo, $clave, $clave2 ");

	#Hacer consulta de todos los que tenga ese correo
	$consulta = ("SELECT * FROM usuarios WHERE correo='$correo'");

	//echo("Consulta $consulta \n");

	$resultado = mysql_query($consulta) or die(mysql_error()."<br />".$insert);

	# Si la consulta es 0 es que no hay registros con ese correo
	# en ése caso, procedemos a guardar el registro.
	if(mysql_num_rows($resultado) === 0){
		if ($clave==$clave2){

			# Cifrar contraseña
			$clave3 = MD5($clave);

			$insert = ("INSERT INTO usuarios (correo, pass, nombre) VALUES ('$correo', '$clave3', '$nombre')");
			
			//echo("-- Insert $insert --");

			# Guardar en BD
			$resultado = mysql_query($insert) or die(mysql_error()."<br />".$insert);

			// Para crear registro en tabla info
			mysql_query("INSERT INTO info (correo) VALUES ('$correo')");
			

			if($resultado){
				//echo("-- ENTER 1 --");
				echo "<html><meta http-equiv=\"refresh\" content=\"3;URL='login.php'\"> <center><h1> Registro exitoso </h1><br></center> </html>";
			}
			else{
				//echo("-- ENTER 2 $resultado --");
				echo "<html><meta http-equiv=\"refresh\" content=\"3;URL='registro.php'\"> <center><h1> Ha ocurrido un error, vuelve a intentarlo. </h1> <br> <h2> Volviendo al registro... </h2></center> </html>";
				die();
			}
		}
		else{
			//header('location: registro.html');
		}
	}
	# Si encontró registro con ése correo, no se puede registrar
	else{
		//echo("-- YA EXISTE. --");
		echo "<html><meta http-equiv=\"refresh\" content=\"3;URL='registro.php'\"> <center><h1> Error; correo ya registrado. </h1> <br> <h2> Volviendo al registro... </h2></center> </html>";
		die();
	}
}


## --------------------------------------------------------------------------------------------------------- ##


## ----------------------------------- Llamadas ------------------------------------------------------------ ##

if(isset($_POST['submitRegistro']))
{
	insert();
} 
?>
<?php
require 'conexion.php';

// Debugger
//ini_set('display_errors', 1);

function sesion(){

	session_start();

	$server = "localhost";
	$username = "arsdiffu_adminWB";
	$password = "adminadminadmin";
	$DB = "arsdiffu_WebDB";

	$conexion = mysqli_connect($server, $username, $password, $DB);

	//Recibimos datos del html
	$correo = $_POST["correo"];
	$pass = $_POST["password"];

	$consulta = "SELECT pass FROM usuarios WHERE correo='$correo' ";

	//echo("$consulta");

	$result= $conexion->query($consulta);

	if(!($result= $conexion->query($consulta))){
		echo("MUERE");
		$conexion-> close();
		die();
	}

	// Si 0 no existe
	if($result->num_rows === 0){
		$result-> free();//Liberamos lo que tiene la variable result
		mysqli_close($conexion);
		echo "<html><meta http-equiv=\"refresh\" content=\"3;URL='/../login.php'\"> <center><h1> Los datos que proporcionaste no son válidos. Vuelve a intentarlo. </h1> <br> <h2> Volviendo al login... </h2></center> </html>";
		//echo("Aqui");
		die();
		
	}

	// Obtener nombre del usuario para la sesión y su id
	$consultaNombre = "SELECT nombre, id FROM usuarios WHERE correo='$correo' ";
	$resultadNombre = $conexion->query($consultaNombre);
	$inforDelNombre = $resultadNombre->fetch_assoc();
	$obtenidoNombre = $inforDelNombre['nombre'];
	$obtenidoId = $inforDelNombre['id'];

	$_SESSION['username'] = $obtenidoNombre;
	$_SESSION['correo'] = $correo;
	$_SESSION['id'] = $obtenidoId;


	$info = $result->fetch_assoc();
	
	$passBD = $info['pass'];
	$passMD5 = MD5($pass);

	if( $passBD === $passMD5 ){
		$result-> free();//Liberamos lo que tiene la variable result
		mysqli_close($conexion);
		header('location: ../blog.php');
	}
	else{
		$result-> free();
		mysqli_close($conexion);
		echo "<html><meta http-equiv=\"refresh\" content=\"3;URL='/../login.php'\"> <center><h1> Los datos que proporcionaste no son válidos. Vuelve a intentarlo. </h1> <br> <h2> Volviendo al login... </h2></center> </html>";
		die();
	}
	
}


if(isset($_POST['submitLogin']))
{
	sesion();
} 
?>

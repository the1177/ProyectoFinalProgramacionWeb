<?php
require 'conexion.php';
//Recibimos datos del html
$correo = $_POST["correo"];
$clave = $_POST["pass1"];
$clave2 = $_POST["pass2"];

$consulta = "SELECT * FROM usuarios WHERE correo='$correo'";

if(!($result= $conexion->query($consulta))){
	 $conexion-> close();
	 die();
}

if($result->num_rows === 0){
	$result-> free();//Liberamos lo que tiene la variable result
	if ($clave==$clave2){

		#$hash= password_hash($pass2, PASSWORD_DEFAULT);

		$insertar = "INSERT INTO usuarios (correo, password) VALUES ('$correo', '$clave')";
		//guardar en BD
		$resultado = mysqli_query($conexion, $insertar);
		mysqli_close($conexion);
		header('location: ../blog.php');
	}
	else{ #Contraseñas no son iguales
		mysqli_close($conexion);
		header('location: ../registro.php');
	}
}
else{
	//Si no mandamos a registrar de nuevo
	$result-> free();//Liberamos lo que tiene la variable result
	mysqli_close($conexion);
	header('location: ../registro.php');
	die();
}

?>
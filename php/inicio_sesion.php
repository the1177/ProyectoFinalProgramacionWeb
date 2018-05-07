<?php
require 'conexion.php';
//Recibimos datos del html
$correo = $_POST["correo"];
$pass = $_POST["password"];

$consulta = "SELECT correo, password FROM usuarios WHERE correo='$correo'";

if(!($result= $conexion->query($consulta))){
	 $conexion-> close();
	 die();
}

// Si 0 no existe
if($result->num_rows === 0){
	$result-> free();//Liberamos lo que tiene la variable result
	mysqli_close($conexion);
    header('location: ../login.php');
    die();
	
}

$info = $result->fetch_assoc();

if($pass === $info['password']){
	$result-> free();//Liberamos lo que tiene la variable result
	mysqli_close($conexion);
	header('location: ../blog.php');
}
else{
    $result-> free();
    mysqli_close($conexion);
    header('location: ../login.php');
    die();
}

?>
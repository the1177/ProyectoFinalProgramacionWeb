<?php

// Debugger
//ini_set('display_errors', 1);

$server = "localhost";
$username = "arsdiffu_adminWB";
$password = "adminadminadmin";
$DB = "arsdiffu_WebDB";

$conexion = mysqli_connect($server, $username, $password, $DB);

if($conexion){
	return 1;
}else{
	die();
}
?>

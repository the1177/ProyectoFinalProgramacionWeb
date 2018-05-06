<?php

require 'conexion.php';

	
if(!$conexion ) {
	die('Could not connect: ' . mysqli_error());
 }
 echo 'Connected successfully'."<br>";
 $sql = 'SELECT publiaciones FROM infouser';
 $result = mysqli_query($conexion, $sql);

 if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
	   echo "Entrada : " . $row["publiaciones"]. "<br>";
	}
 } else {
	echo "No hay publicaciones";
 }
 mysqli_close($conexion);

?>

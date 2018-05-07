<?php
require 'conexion.php';
//Recibimos datos del html
$id = "1"; #Modificar con el id del usuario con la sesion iniciada
$pub = $_POST["pub"];

$insertar = "INSERT INTO publicaciones (id_usuario, publicacion) VALUES ('$id', '$pub')";
//guardar en BD
$resultado = mysqli_query($conexion, $insertar);
mysqli_close($conexion);
header('location: ../publi.php');
?>
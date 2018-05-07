<?php
    require 'conexion.php';
    include("auth.php");

    // Debugger
    ini_set('display_errors', 1);

    //Recibimos datos del html
    $id = $sesion_actual; #Modificar con el id del usuario con la sesion iniciada
    $pub = $_POST["pub"];

    $insertar = "INSERT INTO publicaciones (id_usuario, publicacion) VALUES ('$id', '$pub')";
    //guardar en BD
    $resultado = mysqli_query($conexion, $insertar);
    mysqli_close($conexion);
    header('location: ../publi.php');
?>
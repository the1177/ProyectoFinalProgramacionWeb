<?php

 
    require 'conexion.php';
        //Recibimos datos del html

    session_start();
    $sesion_actual= $_SESSION['id'];
    
    if(!($sesion_actual)){
        header('location: index.php');
        die();	
    }

    $id = $sesion_actual;

    $pub = $_POST["pub"];

    $insertar = "INSERT INTO publicaciones (id_usuario, publicacion) VALUES ('$id', '$pub')";
    //guardar en BD
    $resultado = mysqli_query($conexion, $insertar);
    mysqli_close($conexion);
    header('location: ../publi.php');



?>
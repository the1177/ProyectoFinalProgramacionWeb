<?php
    require 'conexion.php';
    include("auth.php");

    // Debugger
    ini_set('display_errors', 1);

    $correoId = $_SESSION['correo'];

    $consulta = ("SELECT * FROM info WHERE correo='$correoId'");
    
    $result= $conexion->query($consulta);
    $grial = $result->fetch_assoc();

    function actualizar()
    {
        $nombre = $_POST["nombre"];
        
        $apellido = $_POST["apellido"];
        
        $fechaRegistro = $_POST["fechaRegistro"];
        
        $ciudad = $_POST["ciudad"];
        
        $pais = $_POST["pais"];
        
        $idioma = $_POST["idioma"];
        
        $facebook = $_POST["facebook"];
        
        $twitter = $_POST["twitter"];
        
        $github = $_POST["github"];





    }


if(isset($_POST['submitPerfil']))
{
	actualizar();
} 



?>
<?php
    require "conexion.php";
    include("../auth.php");

    // Debugger
    ini_set('display_errors', 1);

    $correoId = $_SESSION['correo'];

    $consulta = ("SELECT * FROM info WHERE correo='$correoId'");
    
    $result= $conexion->query($consulta);
    $grial = $result->fetch_assoc();

    function actualizar()
    {

        $server = "localhost";
        $username = "arsdiffu_adminWB";
        $password = "adminadminadmin";
        $DB = "arsdiffu_WebDB";
        $conexion = mysqli_connect($server, $username, $password, $DB);

        $correoId = $_SESSION['correo'];
        $consulta = ("SELECT * FROM info WHERE correo='$correoId'") or die(mysql_error()."<br />".$consulta);
        $result= $conexion->query($consulta);

        $nombre = $_POST["nombre"];
        
        $apellido = $_POST["apellido"];
        
        $fechaRegistro = $_POST["fechaRegistro"];
        
        $ciudad = $_POST["ciudad"];
        
        $pais = $_POST["pais"];
        
        $idioma = $_POST["idioma"];
        
        $facebook = $_POST["facebook"];
        
        $twitter = $_POST["twitter"];
        
        $github = $_POST["github"];


        $updateMasivo = ("UPDATE info SET
                                nombre = '$nombre',
                                apellido = '$apellido',
                                fechaRegistro = '$fechaRegistro',
                                ciudad = '$ciudad',
                                pais = '$pais',
                                idioma = '$idioma',
                                facebook = '$facebook',
                                twitter = '$twitter',
                                github = '$github'
                        WHERE correo = '$correoId' ");

        $resultadoUpdate = $conexion->query($updateMasivo) or die(mysql_error()."<br />". $updateMasivo);

        if($resultadoUpdate)
        {
            echo "<html><meta http-equiv=\"refresh\" content=\"3;URL='perfil.php'\"> <center><h1> Perfil editado correctamente. </h1><br> <h2> Redireccionando... </h2></center> </html>";
        }

    }


if(isset($_POST['submitActualizar']))
{
    actualizar();        
} 



?>
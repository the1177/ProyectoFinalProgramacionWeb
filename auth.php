<?php

// Debugger
//ini_set('display_errors', 1);

session_start();

if(!isset($_SESSION['username'])){
    echo "<html><meta http-equiv=\"refresh\" content=\"3;URL='login.php'\"> <center><h1> Acesso restringido </h1><br> <h2> Regresando a login... </h2></center> </html>";
}
?>

<?php

session_start();
session_destroy();
echo "<html><meta http-equiv=\"refresh\" content=\"3;URL='/index.html'\"> <center><h1> Cerrando sesión. </h1><br> <h2> Redireccionando a inicio... </h2></center> </html>";

<?
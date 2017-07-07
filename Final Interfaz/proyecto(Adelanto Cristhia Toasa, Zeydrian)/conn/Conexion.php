<?php
$hostname = "localhost";
$database = "prueba";
$user = "root";
$password = "";

$enlace= mysqli_connect($hostname,$user,$password) or die ("Error 1");
/*mysql_select_db($database, $enlace);*/
mysqli_select_db($enlace, $database) or die("Error al conectar");
?>
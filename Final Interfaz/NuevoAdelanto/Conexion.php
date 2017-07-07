<?php
	$hostname = "localhost";
	$database = "base_hilda";
	$user = "root";
	$password = "";

	$enlace = mysqli_connect($hostname,$user,$password) or die("Error al conectar " . mysqli_error());
	mysqli_select_db($enlace, $database) or die ("Error al seleccionar la Base de datos: " . mysqli_error());
?>

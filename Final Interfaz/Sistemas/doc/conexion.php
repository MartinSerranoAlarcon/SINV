<?php
	//constantes
	define('SERVIDOR_BDD','localhost');
	define('BASE_DATOS','pacientes');
	define('USUARIO','root');
	define('CLAVE','');
	$conexion= mysqli_connect(SERVIDOR_BDD,USUARIO,CLAVE,BASE_DATOS) or die ("No se pudo conectar a la BDD" . mysqli_error($conexion));
?>
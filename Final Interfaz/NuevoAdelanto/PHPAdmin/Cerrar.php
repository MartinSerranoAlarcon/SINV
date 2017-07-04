<?php
session_start();
	unset($_SESSION['usuario']); //para destruir todas las 				variables: $_SESSION = array();
	setcookie(session_name(), '', 1);
	session_destroy();
	//header('location: principal.php');
	header("Location: ../Login.php");

/*
efectúa el logout del usario detruyendo COMPLETAMENTE la información de la sesión
Luego de haber ingresado a esta página, el usuario no podrá volver a ingresar
a la página protegida, a no ser que vuelva a logearse
*/

?>
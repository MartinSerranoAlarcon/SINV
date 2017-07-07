<?php /*?><?php
// Inicializar la sesión.
// Si está usando session_name("algo"), ¡no lo olvide ahora!
session_start();

// Destruir todas las variables de sesión.
$_SESSION = array();

// Finalmente, destruir la sesión.
session_destroy();
exit();
header("Location: Contenido.php");
?>
<?php */?>
<?php
session_start();
	unset($_SESSION['usuario']); //para destruir todas las 				variables: $_SESSION = array();
	setcookie(session_name(), '', 1);
	session_destroy();
	//header('location: principal.php');
	header("Location: Index.php");

/*
efectúa el logout del usario detruyendo COMPLETAMENTE la información de la sesión
Luego de haber ingresado a esta página, el usuario no podrá volver a ingresar
a la página protegida, a no ser que vuelva a logearse
*/

?>
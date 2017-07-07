<?php
session_start();

function autoriza(){
	if(isset($_SESSION['usuario'])) {
		return true;
	} else {
		return false;
	}
}
if(autoriza() == false) {
	header('location: Login.php');
}

echo "Hoola ud es usuario publico";
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,
maximum-scale=1.0, minimun-scale=1.0">
<link rel="stylesheet" href="estilos.css">
<link rel="stylesheet" href="fonts/style.css">

</head>
<body background='Imagenes/background-1478187121.png'>

		<a href="Cerrar.php" class="botonregresar" value="Regresar" onclick="" >
		<span class="icon-arrow-bold-left"></span>Regresar
	</a>

</body>
</html>

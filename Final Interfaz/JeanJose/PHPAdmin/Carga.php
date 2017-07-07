<?php 
include('Conexion.php');
	
	$buscar = $_POST['buscar'];
	
	
	$id;
	$nom;
	$dir;
	$telf;
	$cel;

	$consulta = "select C.ID_CLIENTE, C.NOMBRES_CLIENTE, C.DIRECCION_CLIENTE, C.TELEFONO_CLIENTE, C.CELULAR_CLIENTE from clientes C, estado E where C.ID_ESTADO = E.ID_ESTADO and ID_CLIENTE = '".$buscar."'";
	
	$result = mysqli_query($enlace, $consulta)or die(mysqli_error());
while ($row = mysqli_fetch_row($result)){ 
	$id = $row[0];
	$nom = $row[1];
	$dir = $row[2];
	$telf = $row[3];
	$cel = $row[4];


	
}
mysqli_close($enlace);// Cerramos la conexion con la base de datos
?> 
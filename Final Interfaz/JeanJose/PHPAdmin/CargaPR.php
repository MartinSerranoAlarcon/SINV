<?php 
	include('Conexion.php');
	
	$buscar = $_POST['buscar'];
	$id;
	$nom;
	$dir;
	$telf;
	
	if(empty($buscar)){
		exit();
	}
	
	$consulta = "select P.ID_PROVEEDOR, P.NOMBRES_PROVEEDOR, P.DIRECCION_PROVEEDOR, P.TELEFONO_PROVEEDOR from proveedor P, estado E where P.ID_ESTADO = E.ID_ESTADO and P.ID_PROVEEDOR = '".$buscar."';";
	
	$result = mysqli_query($enlace, $consulta)or die(mysqli_error());
while ($row = mysqli_fetch_row($result)){ 
	
	$id = $row[0];
	$nom = $row[1];;
	$dir = $row[2];;
	$telf = $row[3];;	
} 


if(empty($id) || empty($nom) || empty($dir) || empty($telf)){
	$id = '';
	$nom = '';
	$dir = '';
	$telf = '';
}

mysqli_close($enlace);// Cerramos la conexion con la base de datos
?> 
<?php 
include('Conexion.php');
	
	$buscar = $_POST['buscar'];
	
	$id;
	$nom;
	$cant;
	$precio;
	$tp;
	$pro;

	$consulta = "select P.ID_PRODUCTO, P.NOMBRE_PRODUCTO, P.CANTIDAD_PRODUCTO, P.PRECIO_PRODUCTO, TP.NOMBRE_TIPOPRODUCTO, PR.NOMBRES_PROVEEDOR from producto P, tipo_producto TP, proveedor PR where tp.ID_TIPOPRODUCTO = p.ID_TIPOPRODUCTO and pr.ID_PROVEEDOR = P.ID_PROVEEDOR AND ID_PRODUCTO = '".$buscar."'";
	
	$result = mysqli_query($enlace, $consulta)or die(mysqli_error());
while ($row = mysqli_fetch_row($result)){ 
	$id = $row[0];
	$nom = $row[1];
	$cant = $row[2];
	$precio = $row[3];
	$tp = $row[4];	
	$pro = $row[5];	
}

if(empty($id) || empty($nom) || empty($cant) || empty($precio) || empty($tp) || empty($pro)){
	$id = '';
	$nom = '';
	$cant = '';
	$precio = '';
	$tp = '';
	$pro = '';
}


mysqli_close($enlace);// Cerramos la conexion con la base de datos
?> 
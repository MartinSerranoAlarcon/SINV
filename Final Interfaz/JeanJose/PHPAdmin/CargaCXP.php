<?php 
include('Conexion.php');
	
	$buscar = $_POST['buscar'];
	
	$id;
	$cuotas;
	$abono;
	$fecha;
	$valor;
	$estadoa;
	$estadod;
	$factura;
	

	$consulta = "select PR.NOMBRES_PROVEEDOR, P.CUOTAS_CXP, P.PAGAR_CXP, P.FECHA_CXP, P.VALOR_CXP, P.ID_ESTADO, P.FACTURA_CXP from cuentasxpagar P, proveedor PR where   P.ID_PROVEEDOR = '".$buscar."'";
	
	$result = mysqli_query($enlace, $consulta)or die(mysqli_error());
while ($row = mysqli_fetch_row($result)){ 
	$id = $row[0];
	$cuotas = $row[1];
	$abono = $row[2];
	$fecha = $row[3];
	$valor = $row[4];	
	$estadoa = $row[5];	
	$factura = $row[6];	
}

if(empty($id) || empty($cuotas) || empty($abono) || empty($fecha) || empty($valor) || empty($factura)){
	$id = '';
	$cuotas = '';
	$abono = '';
	$fecha = '';
	$valor = '';
	$factura  = '';
}


mysqli_close($enlace);// Cerramos la conexion con la base de datos
?> 
<?php 
include('Conexion.php');
	
	$buscar = $_POST['buscar'];
	
	$id;
	$placa;
	$marca;
	$modelo;
	$tipo;
	

	$consulta = "select T.ID_TRANSPORTE, T.PLACA_TRANSPORTE, T.MARCA_TRANSPORTE, T.MODELO_TRANSPORTE, T.TIPO_TRANSPORTE from transporte T, estado E where T.ID_ESTADO = E.ID_ESTADO and T.PLACA_TRANSPORTE='".$buscar."'";
	
	$result = mysqli_query($enlace, $consulta)or die(mysqli_error());
while ($row = mysqli_fetch_row($result)){ 
	$id = $row[0];
	$placa = $row[1];
	$marca = $row[2];
	$modelo = $row[3];
	$tipo = $row[4];	
}

if(empty($id) || empty($placa) || empty($marca) || empty($modelo) || empty($tipo)){
	$id = '';
	$placa = '';
	$marca = '';
	$modelo = '';
	$tipo = '';
}


mysqli_close($enlace);// Cerramos la conexion con la base de datos
?> 
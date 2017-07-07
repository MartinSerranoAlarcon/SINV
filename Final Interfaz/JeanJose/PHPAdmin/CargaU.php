<?php 
include('Conexion.php');
	
	$buscar = $_POST['buscar'];
	
	$id;
	$nom;
	$tpu;
	$usu;
	$pass;

	$consulta = "select U.ID_USUARIO, TP.NOMBRE_TIPOUSUARIO, U.NOMBRES_USUARIO, U.USER_USUARIO, U.PASS_USUARIO from usuario U, estado E, tipo_usuario TP where U.ID_ESTADO = E.ID_ESTADO and U.ID_TIPOUSUARIO = TP.ID_TIPOUSUARIO AND U.ID_USUARIO = '".$buscar."'";
	
	$result = mysqli_query($enlace, $consulta)or die(mysqli_error());
while ($row = mysqli_fetch_row($result)){ 
	$id = $row[0];
	$tpu = $row[1];
	$nom = $row[2];
	$usu = $row[3];
	$pass = $row[4];	
}

if(empty($id) || empty($nom) || empty($tpu) || empty($usu) || empty($pass)){
	$id = '';
	$tpu = '';
	$nom = '';
	$usu = '';
	$pass = '';
}


mysqli_close($enlace);// Cerramos la conexion con la base de datos
?> 
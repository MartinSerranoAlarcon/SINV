<?php 
include('Conexion.php');
	
	$buscar = $_POST['buscar'];
	
	if(empty($buscar)){
		exit();
	}
	
	$consulta = "select C.ID_CLIENTE, C.NOMBRES_CLIENTE, C.DIRECCION_CLIENTE, C.TELEFONO_CLIENTE, C.CELULAR_CLIENTE from clientes C, estado E where C.ID_ESTADO = E.ID_ESTADO and ID_CLIENTE = '".$buscar."' AND C.ID_ESTADO != 'D'";
	
			$result = mysqli_query($enlace, $consulta)or die(mysqli_error());
while ($row = mysqli_fetch_row($result)){ 
	echo "<tr>
	<td>$row[0]</td>
	<td>$row[1]</td>
	<td>$row[2]</td>
	<td>$row[3]</td>
	<td>$row[4]</td>
	</tr> \n"; 
	
} 
//No Orden 
//	Abono 	
//Cuotas 	
//Valor 	
//Fecha 	
//Estado
mysqli_close($enlace);// Cerramos la conexion con la base de datos
?> 
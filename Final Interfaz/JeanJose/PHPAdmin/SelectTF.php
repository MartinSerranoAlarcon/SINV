<?php 
	include('Conexion.php');
	
	$buscar = $_POST['buscar'];
	
	if(empty($buscar)){
		exit();
	}
	
	
	$consulta = "select T.PLACA_TRANSPORTE, T.MARCA_TRANSPORTE, T.MODELO_TRANSPORTE, T.TIPO_TRANSPORTE, E.NOMBRE_ESTADO from transporte T, estado E where T.ID_ESTADO = E.ID_ESTADO and T.PLACA_TRANSPORTE='".$buscar."' AND T.ID_ESTADO != 'D'";
	
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
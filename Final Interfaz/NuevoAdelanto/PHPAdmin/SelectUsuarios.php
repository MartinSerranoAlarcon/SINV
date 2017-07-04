<?php 
	include('Conexion.php');
	
	$consulta = "select NOMBRES_USUARIO, USER_USUARIO, PASS_USUARIO from usuario P, estado E where P.ID_ESTADO = E.ID_ESTADO";
	
	$result = mysqli_query($enlace, $consulta)or die(mysqli_error());
while ($row = mysqli_fetch_row($result)){ 
	echo "<tr>
	<td>$row[0]</td>
	<td>$row[1]</td>
	<td>$row[2]</td>
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
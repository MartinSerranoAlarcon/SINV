<?php 
	include('Conexion.php');
	
	$consulta = "select ID_USUARIO, NOMBRES_USUARIO, USER_USUARIO, PASS_USUARIO from usuario U, estado E where U.ID_ESTADO = E.ID_ESTADO AND U.ID_ESTADO != 'D'";
	
	$result = mysqli_query($enlace, $consulta)or die(mysqli_error());
while ($row = mysqli_fetch_row($result)){ 
	echo "<tr>
	<td>$row[0]</td>
	<td>$row[1]</td>
	<td>$row[2]</td>
	<td>$row[3]</td>
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
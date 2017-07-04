<?php 
		include('Conexion.php');
			$consulta = "select CC.ID_ORDEN, CC.VALOR_CXC, CC.CUOTAS_CXC, CC.COBRAR_CXC, CC.FECHA_CXC, E.NOMBRE_ESTADO from cuentasxcobrar CC, estado E where CC.ID_ESTADO = E.ID_ESTADO and CC.ID_ESTADO = 'A'";
			$result = mysqli_query($enlace, $consulta)or die(mysqli_error());
while ($row = mysqli_fetch_row($result)){ 
	echo "<tr>
	<td>$row[0]</td>
	<td>$row[1]</td>
	<td>$row[2]</td>
	<td>$row[3]</td>
	<td>$row[4]</td>
	<td>$row[5]</td>
	</tr> \n"; 
} 

mysqli_close($enlace);// Cerramos la conexion con la base de datos
?> 


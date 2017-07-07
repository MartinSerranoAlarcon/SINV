<?php 
		include('Conexion.php');
			$consulta = "select CP.FACTURA_CXP, CP.VALOR_CXP, CP.CUOTAS_CXP, CP.PAGAR_CXP, CP.FECHA_CXP, E.NOMBRE_ESTADO from cuentasxpagar CP, estado E where CP.ID_ESTADO = E.ID_ESTADO and CP.ID_ESTADO = 'A'";
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
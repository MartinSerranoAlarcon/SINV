<?php 
include('Conexion.php');
	
	$buscar = $_POST['buscar'];
	
	if(empty($buscar)){
		exit();
	}
	
	$consulta = "select CP.FACTURA_CXP, CP.VALOR_CXP, CP.CUOTAS_CXP, CP.PAGAR_CXP, CP.FECHA_CXP, E.NOMBRE_ESTADO from cuentasxpagar CP, estado E where CP.ID_ESTADO = E.ID_ESTADO  AND CP.ID_ESTADO != 'D' and CP.ID_PROVEEDOR= '".$buscar."' ";
	
	
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
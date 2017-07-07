<?php 
	include('Conexion.php');
	
	$buscar = $_POST['buscar'];
	
	if(empty($buscar)){
		exit();
	}
	
	$consulta = "select P.ID_PROVEEDOR, P.NOMBRES_PROVEEDOR, P.DIRECCION_PROVEEDOR, P.TELEFONO_PROVEEDOR from proveedor P, estado E where P.ID_ESTADO = E.ID_ESTADO and P.ID_PROVEEDOR = '".$buscar."' AND P.ID_ESTADO != 'D';";
	
	$result = mysqli_query($enlace, $consulta)or die(mysqli_error());
while ($row = mysqli_fetch_row($result)){ 
	echo "<tr>
	<td>$row[0]</td>
	<td>$row[1]</td>
	<td>$row[2]</td>
	<td>$row[3]</td>
	</tr> \n"; 
} 

mysqli_close($enlace);// Cerramos la conexion con la base de datos
?> 
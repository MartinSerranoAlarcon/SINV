<?php 
include('Conexion.php');
/*	
	$buscar = isset($_POST['nombre']);
	
	if(empty($buscar)){
		
	$consulta = "select C.ID_CLIENTE, C.NOMBRES_CLIENTE, C.DIRECCION_CLIENTE, C.CELULAR_CLIENTE, C.TELEFONO_CLIENTE from clientes C";
	$result = mysqli_query($enlace, $consulta)or die(mysqli_error());
	while ($row = mysqli_fetch_array($result)){ 
	echo "<tr>
	<td>$row[0]</td>
	<td>$row[1]</td>
	<td>$row[2]</td>
	<td>$row[3]</td>
	<td>$row[4]</td>
	</tr> \n"; 
} 
	}
	
	else{
		$consulta = "select C.ID_CLIENTE, C.NOMBRES_CLIENTE, C.DIRECCION_CLIENTE, C.CELULAR_CLIENTE, E.NOMBRE_ESTADO from clientes C, estado E where ID_CLIENTE = '".$buscar."'";
	
			$result = mysqli_query($enlace, $consulta)or die(mysqli_error());
while ($row = mysqli_fetch_array($result)){ 
	echo "<tr>
	<td>$row[0]</td>
	<td>$row[1]</td>
	<td>$row[2]</td>
	<td>$row[3]</td>
	<td>$row[4]</td>
	</tr> \n"; 
} 
	}*/
//mysqli_close($enlace);// Cerramos la conexion con la base de datos
$where = '';
//boton de busqueda
if (isset($_POST['btnBuscar'])) {
 $busqueda = $_POST['txtBusqueda'];
 $tipoBusqueda = $_POST['tipoBusqueda'];
 $where = "where C.".$tipoBusqueda." like '".$busqueda."%'";
 }
 
 $mysqli = $enlace;
      if($consultaSQL = mysqli_query($mysqli, "sELECT C.ID_CLIENTE, C.NOMBRES_CLIENTE, C.DIRECCION_CLIENTE, C.TELEFONO_CLIENTE, C.CELULAR_CLIENTE FROM CLIENTES C ".$where)){
        while ($filas = mysqli_fetch_array($consultaSQL)) {
            echo "
            <tr>
        			<td>".$filas['ID_CLIENTE']."</td>
        			<td>".$filas['NOMBRES_CLIENTE']."</td>
        			<td>".$filas['DIRECCION_CLIENTE']."</td>
        			<td>".$filas['TELEFONO_CLIENTE']."</td>
        			<td>".$filas['CELULAR_CLIENTE']."</td>
        		</tr>";
        }
      }
?> 
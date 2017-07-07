<?php 
include('Conexion.php');
	//echo $buscar;
	/*$buscar=isset($_POST['producto']);*/
/*if(!empty($buscar)){
$query="Select NOMBRE_PRODUCTO, NOMBRE_TIPOPRODUCTO,CANTIDAD_PRODUCTO, PRECIO_PRODUCTO from producto, tipo_producto";
$resultado=mysqli_query($enlace,$query);
while($fila=mysqli_fetch_row($resultado)){
	echo"<tr> 
	<td>$fila[0]<br></td>
	<td>$fila[1]<br></td>
	<td>$fila[2]<br></td>
	<td>$fila[3]<br></td>
	</tr>";
	
}	

}else{
$query="Select p.NOMBRE_PRODUCTO, t.NOMBRE_TIPOPRODUCTO,p.CANTIDAD_PRODUCTO, p.PRECIO_PRODUCTO from producto p, tipo_producto t where NOMBRE_PRODUCTO='".$buscar."'" ;	
$resultado=mysqli_query($enlace,$query);
while($fila=mysqli_fetch_array($resultado)){
	echo"<tr>"; 
	echo"<td>$fila[0]<br></td>";
	echo"<td>$fila[1]<br></td>";
	echo"<td>$fila[2]<br></td>";
	echo"<td>$fila[3]<br></td>";
	echo"</tr>";	
}
}
*/

$where = '';
//boton de busqueda
if (isset($_POST['btnBuscar'])) {
  $busqueda = $_POST['txtBusqueda'];
  $where = "where  P.NOMBRE_PRODUCTO like '".$busqueda."%'";
}
$mysqli = $enlace;
      if($consultaSQL = mysqli_query($mysqli, "select P.ID_PRODUCTO, P.NOMBRE_PRODUCTO, P.CANTIDAD_PRODUCTO, P.PRECIO_PRODUCTO FROM PRODUCTO P ".$where)){
        while ($filas = mysqli_fetch_array($consultaSQL)) {
            echo "
            <tr>
        			<td>".$filas['ID_PRODUCTO']."</td>
        			<td>".$filas['NOMBRE_PRODUCTO']."</td>
        			<td>".$filas['CANTIDAD_PRODUCTO']."</td>
        			<td>".$filas['PRECIO_PRODUCTO']."</td>
        		</tr>";
        }
      }
?>
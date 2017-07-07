<?php
include 'Conexion.php';
$where = '';
//boton de busqueda
if (isset($_POST['btnBuscar'])) {
 $busqueda = $_POST['txtBusqueda'];
 $tipoBusqueda = $_POST['tipoBusqueda'];
 $where = "where P.".$tipoBusqueda." like '".$busqueda."%'";
}
$mysqli = $enlace;
      if($consultaSQL = mysqli_query($mysqli, "sELECT P.ID_PROVEEDOR, P.NOMBRES_PROVEEDOR, P.DIRECCION_PROVEEDOR, P.TELEFONO_PROVEEDOR FROM PROVEEDOR P ".$where)){
        while ($filas = mysqli_fetch_array($consultaSQL)) {
            echo "
            <tr>
        			<td>".$filas['ID_PROVEEDOR']."</td>
        			<td>".$filas['NOMBRES_PROVEEDOR']."</td>
        			<td>".$filas['DIRECCION_PROVEEDOR']."</td>
        			<td>".$filas['TELEFONO_PROVEEDOR']."</td>
        		</tr>";
        }
      }
/*	  $query="select P.ID_PROVEEDOR, P.NOMBRES_PROVEEDOR, P.DIRECCION_PROVEEDOR, P.TELEFONO_PROVEEDOR FROM PROVEEDOR P";
$resultado=mysqli_query($enlace,$query);
while($fila=mysqli_fetch_array($resultado)){
	echo"<tr> 
	<td>$fila[0]<br></td>
	<td>$fila[1]<br></td>
	<td>$fila[2]<br></td>
	<td>$fila[3]<br></td>
	</tr>";
	
}*/		
	/*  $valor1='CEDULA/RUC';
	  
	  $buscar=isset($_POST['txtBusqueda']);
	  $tipoBusqueda = isset($_POST['tipoBusqueda']);
	  if($tipoBusqueda=$valor1)
	  {
		  $query="select P.ID_PROVEEDOR, P.NOMBRES_PROVEEDOR, P.DIRECCION_PROVEEDOR, P.TELEFONO_PROVEEDOR FROM PROVEEDOR P where P.ID_PROVEEDOR='".$buscar."'%'";
$resultado=mysqli_query($enlace,$query);
while($fila=mysqli_fetch_array($resultado)){
	echo"<tr> 
	<td>$fila[0]<br></td>
	<td>$fila[1]<br></td>
	<td>$fila[2]<br></td>
	<td>$fila[3]<br></td>
	</tr>";
	
}	
		  
		  }*/
?>
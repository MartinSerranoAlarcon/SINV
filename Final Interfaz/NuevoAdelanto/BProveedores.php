<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,
maximum-scale=1.0, minimun-scale=1.0">
<link rel="stylesheet" href="estilos.css">
<link rel="stylesheet" href="fonts/style.css">
<?php include 'Conexion.php';

$where = '';
//boton de busqueda
if (isset($_POST['btnBuscar'])) {
 $busqueda = $_POST['txtBusqueda'];
 $tipoBusqueda = $_POST['tipoBusqueda'];
 $where = "where P.".$tipoBusqueda." like '".$busqueda."%'";
}
?>
</head>
<body background='Imagenes/background-1478187121.png'>
	<script type="text/javascript" src="factura.js"></script>
<header class="header">
	<div class="contenedor">
		<img src="Imagenes/Logo.png"  width=220 height=70>
		<h1 class="Titulo">Alquiler de Vajillas "Hilda Maria"</h1>
		<a href="#" class="botonregresar" value="Regresar" onclick="" >
		<span class="icon-arrow-bold-left"></span>Regresar
	</a>
	</div>
</header>

<script type="text/javascript" src="factura.js"></script>
<br>
<center><div class="Factura">
<br><hr><br>
<center><h1 class="Titulo">Busqueda de Proveedores</h1></center>
<form method="post">
	<table>
		<td><h2>Busqueda por:</h2></td>
		<td><select size=1 name="tipoBusqueda">
			<option value="ID_PROVEEDOR">CEDULA/RUC</option>
			<option value="NOMBRES_PROVEEDOR">NOMBRES</option>
			<option value="NOMBRES_PROVEEDOR">APELLIDOS</option>
			</select>
		</td>
		<td><input type="text" id="direccioncliente" name="txtBusqueda" size="20px"></td>
		<td><center><a href="#" class="botonguardar"><span class="icon-eye"></span>Buscar</a></center></td>
		<td><button type="submit" name="btnBuscar">Buscar</button></td>
	</table>
</form>
	<br><br>
<div>
	<center><table class="tb1">
		<tr>
			<td><b>Cedula</b></td>
			<td><b>Nombres</b></td>
			<td><b>Apellidos</b></td>
			<td><b>Direccion</b></td>
			<td><b>Telefono</b></td>
		</tr>
		<?php
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
		 ?>
	</table></center>
<center><a href="#" class="botonimprimir">
		<span class="icon-print"></span>Imprimir
	</a></center>
</div>
<br><br><br><hr><br>
</div></center>
<footer class="footer">
<center><h3>&copy; Todos los derechos reservados</h3></center>
</footer>
<script src="Menu.js"></script>
</body>
</html>

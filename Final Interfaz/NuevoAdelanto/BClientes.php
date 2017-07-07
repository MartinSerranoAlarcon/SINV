<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,
maximum-scale=1.0, minimun-scale=1.0">
<link rel="stylesheet" href="estilos.css">
<link rel="stylesheet" href="fonts/style.css">
<?php
include 'Conexion.php';

$where = '';
//boton de busqueda
if (isset($_POST['btnBuscar'])) {
 $busqueda = $_POST['txtBusqueda'];
 $tipoBusqueda = $_POST['tipoBusqueda'];
 $where = "where C.".$tipoBusqueda." like '".$busqueda."%'";
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
		<nav class="nav" id="nav">
			<ul class="Menu">
				<li class="Menu_item"><a class="Menu_link select" href="">Inicio</a></li>
				<li class="Menu_item"><a class="Menu_link" href="">Información</a></li>
			</ul>
		</nav>
	</div>
</header>

<script type="text/javascript" src="factura.js"></script>
<br>
<center><div class="Factura">
<br><hr><br>
<center><h1 class="Titulo">Busqueda  de Clientes</h1></center>
<form method="post">
	<table>
		<td><h2>Busqueda por:</h2></td>
		<td><select size=1 name="tipoBusqueda">
			<option value="ID_CLIENTE">CEDULA</option>
			<option value="NOMBRES_CLIENTE">NOMBRES</option>
			<option value="NOMBRES_CLIENTE">APELLIDOS</option>
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
			<td><b>Cedula/ID</b></td>
			<td><b>Nombres</b></td>
			<td><b>Apellidos</b></td>
			<td><b>Direccion</b></td>
			<td><b>Telefono</b></td>
			<td><b>Celular</b></td>
		</tr>
		<?php
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
	</table></center>

</div>
<center><a href="#" class="botonimprimir">
		<span class="icon-print"></span>Imprimir
	</a></center>
<br><br><br><hr><br>
</div></center>

<footer class="footer">
<center><h3>&copy; Todos los derechos reservados</h3></center>
</footer>
<script src="Menu.js"></script>
</body>
</html>

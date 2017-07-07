<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,
maximum-scale=1.0, minimun-scale=1.0">
<link rel="stylesheet" href="estilos.css">
<link rel="stylesheet" href="fonts/style.css">
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
<table>
	<td><h2>Busqueda por:</h2></td>
	<td><select size=1 name="tipoBusqueda">
			<option value="ID_PROVEEDOR">CEDULA/RUC</option>
			<option value="NOMBRES_PROVEEDOR">NOMBRES</option>
			<option value="NOMBRES_PROVEEDOR">APELLIDOS</option>
			</select>
		</td>
		<td><input type="text" id="direccioncliente" size="20px" name="txtBusqueda"></td>
    
	<td><center><input type="submit" class="botones" value="Buscar" name="btnBuscar"></input></center></td>
</table>
	<br><br>
<div>
	<center><table class="tb1">
		<tr>
			<td><b>Id_Proveedor</b></td>
			<td><b>Nombre Proveedor</b></td>
			<td><b>Direccion</b></td>
			<td><b>Telefono</b></td>
		</tr>
		<?php
		include('metodossecretaria/consultaproveedores.php');
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
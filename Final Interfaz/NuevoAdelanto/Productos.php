<?php
session_start();
function autoriza(){
	  if(isset($_SESSION['usuario']) == true && $_SESSION['tipo'] == 1) {
		return true;
	} else {
		return false;
	}
}

if(autoriza() == false) {
	header('location: PHPAdmin/Cerrar.php');
}
?>
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
		<a href="Administrador.php" class="botonregresar" value="Regresar" onclick="" >
		<span class="icon-arrow-bold-left"></span>Regresar
	</a>
	</div>
</header>

<script type="text/javascript" src="factura.js"></script>
<br>
<center><div class="Factura">
<center><h1 class="Titulo">Ingreso y Modificacion de Productos</h1></center>
<div class="EncabezadoFactura">	
	<center><table border=0 width="730px">
	<form name="IngresoProdu" method="post" action="PHPAdmin/InsertP.php">
    <tr>
	<th> ID PRODUCTO: </th>
	<td><input type="text" id= "nombreproducto" size="35px" name="idnomp"></td>
	</tr>
	<tr>
	<th> NOMBRE DE PRODUCTO: </th>
	<td><input type="text" id= "nombrecliente" size="35px" name="nomp"></td>
	</tr>
	<tr>
	<th> CANTIDAD: </th>
	<td><input type="text" id="telefono" size="10px" name="cant"></td>
	</tr>
	<tr>
	<th> PRECIO: </th>
	<td><input type="text" id="telefono" size="10px" name="prec"></td>
	<tr>
	<th> TIPO PRODUCTO: </th>
    <td><select name="ntipoprod">
		<option value="" selected>Elija un Tipo</option>
		<?php include('PHPAdmin/ComboTipoProducto.php'); ?>
        </select></td>
	</tr>
	<tr>
	<th> PROVEEDOR: </th>
    <td><select name="proveedor">
		<option value="" selected>Elija Proveedor</option>
		<?php include('PHPAdmin/ComboProveedor.php'); ?>
        </select></td>
	</tr>
	</table>
</div>
<table>
<td><center>
		<span class="icon-save"></span><input type="submit" value="Guardar" class="botonguardar">
</center></td>
<td><center><a href="#" class="botonguardar">
		<span class="icon-new-message"></span>Modificar
</a></center></td>
</table></form>
<br><hr><br>
<center><h1 class="Titulo">Busqueda y Eliminacion de Productos</h1></center>
<table>
	<td><h2>Ingresar el nombre del producto: <input type="text" id="direccioncliente" size="20px"></h2></td>
	<td><center><a href="#" class="botonguardar">
		<span class="icon-eye"></span>Buscar
	</a></center></td>
	<td><center><a href="#" class="botonguardar">
		<span class="icon-erase"></span>Eliminar
	</a></center></td>
	</table>
	<br><br>
<div>
	<center><table class="tb1">
		<tr>
			<td><b>Producto</b></td>
			<td><b>Nombre Producto</b></td>
			<td><b>Cantidad</b></td>
			<td><b>Precio</b></td>
		</tr>
		<?php 
		include('PHPAdmin/SelectP.php'); 
		?> 
	</table></center>

</div>
	
	
</div></center>
<br><br>		
<footer class="footer">
<center><h3>&copy; Todos los derechos reservados</h3></center>
</footer>
<script src="Menu.js"></script>
</body>
</html>
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
include('PHPAdmin/ComboTipoProducto.php');
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
	<td><input type="text" id= "nombreproducto" size="35px" maxlength="10" name="idnomp"></td>
	</tr>
	<tr>
	<th> NOMBRE DE PRODUCTO: </th>
	<td><input type="text" id= "nombrecliente" size="35px" maxlength="80" name="nomp"></td>
	</tr>
	<tr>
	<th> CANTIDAD: </th>
	<td><input type="number" id="telefono" min="0" size="10px" max="11" name="cant"></td>
	</tr>
	<tr>
	<th> PRECIO: </th>
	<td><input type="text" id="telefono" size="10px" name="prec"></td>
	<tr>
	<th> TIPO PRODUCTO: </th>
    <td><select name="ntipoprod">
		<option value="" selected>Elija un Tipo</option>
		<?php  com1();?>

        </select></td>
	</tr>
	<tr>
	<th> PROVEEDOR: </th>
    <td><select name="proveedor">
		<option value="" selected>Elija Proveedor</option>
		<?php com2();?>
        </select></td>
	</tr>
	</table>
</div>
<table>
<td><center>
		<span class="icon-save"></span><input type="submit" value="Guardar" class="botonguardar">
</center></td>
</table></form>
<br><hr><br>
<center><h1 class="Titulo">Busqueda y Eliminacion de Productos</h1></center>
<form name="Buscar" method="post">
	<table>
	<td><h2>ID del Producto:<input type="text" id="direccioncliente" size="20px" name="buscar"></h2></td>
	<td><center><span class="icon-eye"></span><input type="submit" value="Buscar" onClick="this.form.action = 'ProductosFiltrado.php'" class="botones">
	</center></td>
	<td><center><span class="icon-erase"></span><input type="submit" value="Eliminar" onClick="this.form.action = 'PHPAdmin/DeleteP.php'" class="botones">
	</center></td>
	</table>
</form>
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
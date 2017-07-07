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
include('PHPAdmin/CargaPR.php');
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
		<a href="Proveedores.php" class="botonregresar" value="Regresar" onclick="" >
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
<center><h1 class="Titulo">Ingreso y Modificacion de Proveedores</h1></center>
<div class="EncabezadoFactura">
	
   	<form name="IngresoProveedor" method="post" action="PHPAdmin/UpdateProveedores.php">
	<center><table border=0 width="730px">
	
	<tr>
	<th> CEDULA / RUC: </th>
	<td><input type="text" id= "nombrecliente" size="35px" value="<?php echo $id;?>" name="idproveedor" readonly></td>
	</tr>

	<tr>
	<th> NOMBRES: </th>
	<td><input type="text" id= "nombrecliente" size="35px" maxlength="50" value="<?php echo $nom;?>" name="nombre"></td>
	</tr>
    
	<tr>
	<th> DIRECCION:</th>
	<td colspan="4"><input type="text" id="direccioncliente" maxlength="50" size="50px" value="<?php echo $dir;?>" name="direccion"></td>
	</tr>

	<tr>
	<th>TELEFONO:</th>
	<td><input type="text" id="telefono" max="10" value="<?php echo $telf;?>" name="telefono"></td>
	</tr>
	</table>
</div>
<table>
<td><center>
<span class="icon-new-message"></span>
<input type="submit" value="Modificar" class="botonguardar">		
</center></td>
</table>
</form>
<br><hr><br>
<center><h1 class="Titulo">Busqueda y Eliminacion de Proveedores</h1></center>
<form name="Buscar" method="post" action="ProveedoresFiltrados.php">
	<table>
	<td><h2>ID del Proveedor:<input type="text" id="usuid" size="20px" name="buscar"></h2></td>
	<td><center><span class="icon-eye"></span><input type="submit" value="Buscar" class="botones"></td>
	</table>
</form>
	<br><br>
<div>
	<center><table class="tb1">
		<tr>
			<td><b>Cedula</b></td>
			<td><b>Nombre y Apellido</b></td>
			<td><b>Direccion</b></td>
			<td><b>Telefono</b></td>
		</tr>
		<?php include('PHPAdmin/SelectPRF.php')?>
	</table></center>

</div>
</div></center><br><br>	
<footer class="footer">
<center><h3>&copy; Todos los derechos reservados</h3></center>
</footer>
<script src="Menu.js"></script>
</body>
</html>
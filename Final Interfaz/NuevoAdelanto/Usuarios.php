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
<center><h1 class="Titulo">Ingreso y Modificacion de Usuarios</h1></center>
<div class="EncabezadoFactura">
	
	<form name="IngresoUsu" method="post" action="PHPAdmin/InsertUsuario.php">
	<center><table border=0 width="730px">
	<tr>
	<th> CEDULA USUARIO: </th>
	<td><input type="text" id= "nombrecliente" size="35px" name="idusu"></td>
	</tr>

	<tr>
	<th> NOMBRES: </th>
	<td><input type="text" id= "nombrecliente" size="35px" name="nombre"></td>
	</tr>
	
	<tr>
	<th> APELLIDOS: </th>
	<td><input type="text" id= "nombrecliente" size="35px" name="apellido"></td>
	</tr>

	<tr>
	<th> USUARIO: </th>
	<td colspan="4"><input type="text" id="direccioncliente" size="35px" name="usu"></td>
	</tr>

	<tr>
	<th> CONTRASEÑA: </th>
	<td><input type="password" id="telefono" size="35px" name="pass"></td>
	</tr>

	<tr>
	<th> USUARIOS: </th>
    <td><select name="usuario">
	<!--<option value="" selected>Elija Proveedor</option>-->
		<?php include('PHPAdmin/ComboUsuario.php'); ?>
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
</table>
<br><hr><br>
<center><h1 class="Titulo">Busqueda y Eliminacion de Usuarios</h1></center>
<table>
	<td><h2>Ingrese el usuario:<input type="text" id="direccioncliente" size="20px"></h2></td>
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
			<td><b>Nombre</b></td>
			<td><b>Usuario</b></td>
			<td><b>Contraseña</b></td>
		</tr>
		<?php include('PHPAdmin/SelectUsuarios.php'); ?>
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
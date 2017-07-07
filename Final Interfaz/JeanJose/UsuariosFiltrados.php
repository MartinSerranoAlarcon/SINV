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
include('PHPAdmin/CargaU.php');
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
		<a href="Usuarios.php" class="botonregresar" value="Regresar" onclick="" >
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
	
	<form name="IngresoUsu" method="post" action="PHPAdmin/UpdateUsuarios.php">
	<center><table border=0 width="730px">
	<tr>
	<th> CEDULA USUARIO: </th>
	<td><input type="text" id= "nombrecliente" size="35px" value="<?php echo $id;?>" name="idusu" readonly></td>
	</tr>

	<tr>
	<th> NOMBRES: </th>
	<td><input type="text" id= "nombrecliente" size="35px" maxlength="50" value="<?php echo $nom;?>" name="nombre"></td>
	</tr>

	<tr>
	<th> USUARIO: </th>
	<td colspan="4"><input type="text" id="direccioncliente" maxlength="10" size="35px" value="<?php echo $usu;?>" name="usu"></td>
	</tr>

	<tr>
	<th> CONTRASEÑA: </th>
	<td><input type="password" id="telefono" size="35px" maxlength="10" value="<?php echo $pass;?>" name="pass"></td>
	</tr>

	<tr>
	<th> USUARIOS: </th>
    <td><select name="usua">
	<option value="" selected><?php echo $tpu;?></option>
		<?php include('PHPAdmin/ComboUsuario.php'); ?>
        </select></td>
	</tr>

	</table>
</div>
<table>
<td><center>
		<span class="icon-new-message"></span><input type="submit" value="Modificar" class="botonguardar">
</center></td>
</table>
</form>
<br><hr><br>
<center><h1 class="Titulo">Busqueda y Eliminacion de Usuarios</h1></center>
<form name="Buscar" method="post" action="UsuariosFiltrados.php">
	<table>
	<td><h2>ID del Usuario:<input type="text" id="usuid" size="20px" name="buscar"></h2></td>
	<td><center><span class="icon-eye"></span><input type="submit" value="Buscar" class="botones"></td>
	</table>
</form>
	<br><br>
<div>
	<center><table class="tb1">
		<tr>
			<td><b>ID Usuario</b></td>
			<td><b>Nombre</b></td>
			<td><b>Usuario</b></td>
			<td><b>Contraseña</b></td>
		</tr>
		<?php include('PHPAdmin/SelectUF.php'); ?>
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
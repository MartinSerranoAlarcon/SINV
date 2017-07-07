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
include('PHPAdmin/CargaC.php');
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
		<a href="Clientes.php" class="botonregresar" value="Regresar" onclick="" >
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
<center><h1 class="Titulo">Ingreso y Modificacion de Clientes</h1></center>
<div class="EncabezadoFactura">
	
	<form name="UpdateCliente" method="POST" action="PHPAdmin/UpdateCliente.php">
	<center><table border=0 width="730px">
	<tr>
	<th> CEDULA/ID: </th>
	<td><input type="text" id= "nombrecliente" name="ced" size="35px" readonly value="<?php echo $id;?>"></td>
	</tr>

	<tr>
	<th> NOMBRES: </th>
	<td><input type="text" id= "nombrecliente" name="nombre" maxlength="50" size="35px" value="<?php echo $nom;?>"></td>
	</tr>

	<tr>
	<th> DIRECCION:</th>
	<td colspan="4"><input type="text" id="direccioncliente" maxlength="50" name="dir" size="50px" value="<?php echo $dir;?>"></td>
	</tr>

	<tr>
	<th>TELEFONO:</th>
	<td><input type="number" id="telefono" name="telf" min="0" maxlength=""="7" value="<?php echo $telf;?>"></td>
	</tr>
	
	<tr>
	<th> CELULAR:</th>
	<td><input type="text" id="telefono" name="cel" maxlength="10" value="<?php echo $cel;?>"></td>
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
<center><h1 class="Titulo">Busqueda y Eliminacion de Clientes</h1></center>
<table>
	<form name="Buscar" method="post" action="ClientesFiltrados.php">
	<td><h2>Cedula /ID del Cliente:<input type="text" id="direccioncliente" size="20px" name="buscar"></h2></td>
	<td><center><span class="icon-eye"></span><input type="submit" value="Buscar" class="botones">
	</center></td>
	</table>
    </form>
	<br><br>
<div>
	<center><table class="tb1">
		<tr>
			<td><b>Cedula/ID</b></td>
			<td><b>Nombres</b></td>
			<td><b>Direccion</b></td>
			<td><b>Telefono</b></td>
			<td><b>Celular</b></td>
		</tr>
		<?php 
	include('PHPAdmin/SelectCF.php');
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
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

<center>
<div class="Cuentas">
    
<div class="Cuentas_Co">

<center> <h1>Cuentas por Pagar</h1></center>

<div class="Cuentas_Cobrar">
	<form name="IngresoCXP" method="POST" action="PHPAdmin/InsertCXP.php">
	<center><table border=0 width="100%">

	<th> PROVEEDOR: </th>
    <td><select name="proveedor">
		<option value="" selected>Elija Proveedor</option>
		<?php include('PHPAdmin/ComboProveedor.php'); ?>
        </select></td>
	<th>Cuotas: </th>
	<td><input type="number" step="any" min="0" id="Cuotas_Cuenta_Cobrar" name="cuotas" size="20px"></td>
	</tr>

	<tr>
	<th>Abono:</th>
	<td><input type="text" step="any" id="Abono_Cuenta_Pagar" size="43px" name="abono"></td>
	<th>Fecha:</th>
	<Td><input type="date" id="fecha_Cuenta_Pagar" size="25px" name="fecha"></td>
	</tr>

	<tr>
	<th>Valor:</th>
   	<td><input type="text" step="any" id="Valor_Cuenta_Pagar" size="43px" name="svalor"></td>
	<th>Estado:</th>
	<td width="15" style="font-size:15px">Ingresada<input type="checkbox" id="I" size="5" name="estadoa" value="1"></td>
	<td width="15" style="font-size:15px">Terminada<input type="checkbox" id="T" size="5" name="estadod" value="1"></td>
	</tr>
    <tr>
	<th>Factura:</th>
   	<td><input type="number" id="Valor_Cuenta_Pagar" min="0" size="43px" name="factura"></td>
    </tr>
	</table>
<center>
    <span class="icon-save"></span><input type="submit" value="Guardar" class="botonguardar">
	</center>
</form>

</div>
</div>
<hr>
<center><h1 class="Titulo">Busqueda y Eliminacion de Proveedores</h1></center>
<form name="Buscar" method="post">
<table>
	<td><h2>Cedula /ID del Proveedor:<input type="text" id="direccioncliente" size="20px" name="buscar"></h2></td>
	<td><center>
		<span class="icon-eye"></span><input type="submit" value="Buscar" onClick="this.form.action = 'Cuentas_PagarF.php'" class="botones">	</center></td>
	<td><center>
		<span class="icon-erase"></span><input type="submit" value="Eliminar" onClick="this.form.action = 'PHPAdmin/DeleteCXP.php'" class="botones">
	</center></td>
	</table>
    </form>
    
<center><h1>Cuentas por pagar pendientes</h1><center>
<center><table class="tb1">
		<tr>
			<td><b>No Orden</b></td>
			<td><b>Abono</b></td>
			<td><b>Cuotas</b></td>
			<td><b>Valor</b></td>
			<td><b>Fecha</b></td>
			<td><b>Estado</b></td>
		</tr>
		<?php 
		include('PHPAdmin/SelectCXP.php'); 
		?> 
	</table></center>

<br><br>
<table>
<td><center><a href="#" class="botonguardar">
		<span class="icon-save"></span>Guardar
</a></center></td>
<td><center><a href="#" class="botonguardar">
		<span class="icon-new-message"></span>Modificar
</a></center></td>
</table>
</center>
</div>
		
<footer class="footer">
<center><h3>&copy; Todos los derechos reservados</h3></center>
</footer>
<script src="Menu.js"></script>
</body>
</html>
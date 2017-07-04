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

<center>

<div class="Cuentas">
<div class="Cuentas_Co">

<center> <h1>Cuentas por Cobrar</h1></center>
    
    <div class="Cuentas_Cobrar">
	
	<center><table border=0 width="100%">

	<form name="IngresoCXC" method="POST" action="PHPAdmin/InsertCXC.php">
	<tr>
    <th>Numero de Orden:</th>
    <td><input type="text" step="any" id= "NombreCliente" size="20px" name="numorden"></td>
    <th>Valor: </th>
	<td><input type="number" step="any" id= "Valor_Cuenta_Cobrar" size="10px" name="valor"></td>
    </tr>
	<tr>
	<th>Abono:</th>
	<td><input type="number" step="any" id="Abono_Cuenta_Cobrar" size="43px" name="abono"></td>
	<th>Fecha:</th>
	<td>&nbsp &nbsp &nbsp <input type="date" id="fecha_Cuenta_Cobrar" size="25px" name="fecha"></td>
	</tr>

	<tr>
    <th>Cuotas: </th>
	<td><input type="number" step="any" id="Cuotas_Cuenta_Cobrar" name="cuota" size="20px"></td>
	<th>Estado:</th>
	<td width="15" style="font-size:15px">Ingresada<input type="checkbox" id="I" size="5" name="estadoa" value="1"></td>
	<td style="font-size:15px">Terminada<input type="checkbox" id="T" size="5" name="estadod" value="1"></td>
	</tr>
	</table>
<center>
		<span class="icon-save"></span><input type="submit" value="Guardar" class="botonguardar">
	</center>
        </form>

</div>
</div>
</center>
</div>
<center><h1>Cuentas por cobrar pendientes</h1></center>
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
		include('PHPAdmin/SelectCXC.php');
		?>
	</table></center>
<br><br>	
<footer class="footer">
<center><h3>&copy; Todos los derechos reservados</h3></center>
</footer>
<script src="Menu.js"></script>
</body>
</html>
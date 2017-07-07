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

include('PHPAdmin/CargaT.php');
?>


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
		<a href="Transportes.php" class="botonregresar" value="Regresar" onClick="" >
		<span class="icon-arrow-bold-left"></span>Regresar
	</a>
	</div>
</header>

<script type="text/javascript" src="factura.js"></script>
<br>
<center><div class="Factura">
<center><h1 class="Titulo">Ingreso y Modificacion de Transportes</h1></center>
<div class="EncabezadoFactura">
	
    <form name="UpdateTransporte" method="post" action="PHPAdmin/UpdateT.php"> 
	<center><table border=0 width="730px">
    <tr>
	<th> ID TRANSPORTE: </th>
	<td><input type="text" id= "nombrecliente" size="35px" name="id" value="<?php echo $id;?>" readonly></td>
	</tr>
    
	<tr>
	<th> PLACA: </th>
	<td><input type="text" id= "nombrecliente" size="35px" maxlength="7" name="placa" value="<?php echo $placa;?>" ></td>
	</tr>

	<tr>
	<th> MARCA: </th>
	<td colspan="4"><input type="text" id="direccioncliente" maxlength="50" size="35px" name="marca" value="<?php echo $marca;?>"></td>
	</tr>

	<tr>
	<th> MODELO: </th>
	<td><input type="text" id="telefono" size="35px" maxlength="50" name="mode" value="<?php echo $modelo;?>" ></td>
	</tr>

	<tr>
	<th> TIPO TRANSPORTE: </th>
	<td><select size=1 name="tipo" >
	<option value="" selected><?php echo $tipo;?>
    <option>Camioneta</option>
	<option>Camion</option>
	<option>Automovil</option>
	</select></td>
	</tr>
	
	
	
	</table>
</div>
<table>
<td><center>
		<span class="icon-new-message"></span>
        <input type="submit" value="Modificar" class="botonguardar"></center></td>
</table></form>
<br><hr><br>
<center><h1 class="Titulo">Busqueda y Eliminacion de Transportes</h1></center>
<form name="Buscar" method="post" action="TransportesFiltrados.php">
<table>
	<td><h2>Placa del Vehiculo:<input type="text" id="direccioncliente" size="20px"></h2></td>
	<td><center>
		<span class="icon-eye"></span><input type="submit" value="Buscar" class="botones">	</center></td>
	</table></form>
	<br><br>
<div>
	<center><table class="tb1">
		<tr>
			<td><b>Placa</b></td>
			<td><b>Marca</b></td>
			<td><b>Modelo</b></td>
			<td><b>Tipo Vehiculo</b></td>
			<td><b>Estado</b></td>
		</tr>
		<?php include('PHPAdmin/SelectTF.php'); ?>
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
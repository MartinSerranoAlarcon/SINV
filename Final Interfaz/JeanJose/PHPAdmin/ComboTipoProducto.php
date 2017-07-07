<?php 
include('Conexion.php');


function com1(){
include('Conexion.php');
	$consulta = "select NOMBRE_TIPOPRODUCTO from tipo_producto";
	$result = mysqli_query($enlace, $consulta)or die(mysqli_error());
while ($row = mysqli_fetch_row($result)){ 
	echo "<option>$row[0]</option>"; 
	} 
mysqli_close($enlace);
}

function com2(){
include('Conexion.php');
$consulta = "select NOMBRES_PROVEEDOR from proveedor";
			$result = mysqli_query($enlace, $consulta)or die(mysqli_error());
while ($row = mysqli_fetch_row($result)){ 
	echo "<option>$row[0]</option>"; 
} 
mysqli_close($enlace);// Cerramos la conexion con la base de datos

}


// Cerramos la conexion con la base de datos
?> 
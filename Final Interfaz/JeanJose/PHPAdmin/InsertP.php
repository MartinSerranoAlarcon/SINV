<?php 
include('Conexion.php');

$IDProducto = $_POST['idnomp'];
$Producto = $_POST['nomp'];
$Cantidad = $_POST['cant'];
$Precio = $_POST['prec'];
$tipo = $_POST['ntipoprod'];
$proveedor = $_POST['proveedor'];
$idtipo;
$idproveedor;


// Check connection
if (!$enlace) {
    die("Coneccion fallida: " . mysqli_connect_error());
}
//Tabla Heredada 1
$consulta = "select ID_TIPOPRODUCTO from tipo_producto where NOMBRE_TIPOPRODUCTO = '".$tipo."'";
			$result = mysqli_query($enlace, $consulta)or die(mysqli_error());
while ($row = mysqli_fetch_row($result)){ 
	$idtipo = $row[0]; 
} 
//Tabla Heredad 2
$consulta = "select ID_PROVEEDOR from proveedor where NOMBRES_PROVEEDOR = '".$proveedor."'";
			$result = mysqli_query($enlace, $consulta)or die(mysqli_error());
while ($row = mysqli_fetch_row($result)){ 
	$idproveedor = $row[0]; 
} 



$sql = "INSERT INTO producto(ID_PRODUCTO, ID_TIPOPRODUCTO, ID_ESTADO, ID_PROVEEDOR,  NOMBRE_PRODUCTO, CANTIDAD_PRODUCTO,PRECIO_PRODUCTO) VALUES ('".$IDProducto."', '".$idtipo."','A', '".$idproveedor."', '".$Producto."', '".$Cantidad."', '".$Precio."')";


if (mysqli_query($enlace, $sql)) {
    echo "Correcto";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
}

mysqli_close($enlace);// Cerramos la conexion con la base de datos
//echo 'Los datos han sido insertados en la base de datos';
header("Location: ../Productos.php");
?> 
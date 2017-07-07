<?php 
include('Conexion.php');

$id = $_POST['idnomp'];
$nom = $_POST['nomp'];
$cant = $_POST['cant'];
$precio = $_POST['prec'];
$tp = $_POST['ntipoprod'];
$pro = $_POST['proveedor'];
$idproveedor;
$idtipo;

if(empty($id) || empty($nom) || empty($cant) || empty($precio) || empty($tp) || empty($pro)){
	header("Location: ../Productos.php");
	exit();
}

//Tabla Heredada 1
$consulta = "select ID_TIPOPRODUCTO from tipo_producto where NOMBRE_TIPOPRODUCTO = '".$tp."'";
			$result = mysqli_query($enlace, $consulta)or die(mysqli_error());
while ($row = mysqli_fetch_row($result)){ 
	$idtipo = $row[0]; 
} 
//Tabla Heredad 2
$consulta = "select ID_PROVEEDOR from proveedor where NOMBRES_PROVEEDOR = '".$pro."'";
			$result = mysqli_query($enlace, $consulta)or die(mysqli_error());
while ($row = mysqli_fetch_row($result)){ 
	$idproveedor = $row[0]; 
} 

// Check connection
if (!$enlace) {
    die("Coneccion fallida: " . mysqli_connect_error());
}

$sql = "UPDATE producto SET NOMBRE_PRODUCTO = '".$nom."', CANTIDAD_PRODUCTO = '".$cant."', PRECIO_PRODUCTO = '".$precio."', ID_PROVEEDOR = '".$idproveedor."' WHERE producto.ID_PRODUCTO = '".$id."';";


if (mysqli_query($enlace, $sql)) {
    echo "Correcto";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
}

//echo $sql;

mysqli_close($enlace);// Cerramos la conexion con la base de datos
//echo 'Los datos han sido actualizados en la base de datos';
header("Location: ../Productos.php");
?> 
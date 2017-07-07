<?php 
include('Conexion.php');

$idproveedor = $_POST['idproveedor'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];

if(empty($idproveedor) || empty($nombre) || empty($direccion) || empty($telefono)){
	header("Location: ../Proveedores.php");
	exit();
}

// Check connection
if (!$enlace) {
    die("Coneccion fallida: " . mysqli_connect_error());
}

$sql = "UPDATE proveedor SET NOMBRES_PROVEEDOR = '".$nombre."', DIRECCION_PROVEEDOR = '".$direccion."', TELEFONO_PROVEEDOR = '".$telefono."' WHERE ID_PROVEEDOR = '".$idproveedor."';";

if (mysqli_query($enlace, $sql)) {
    echo "Correcto";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
}

//echo $sql;

mysqli_close($enlace);// Cerramos la conexion con la base de datos
//echo 'Los datos han sido actualizados en la base de datos';
header("Location: ../Proveedores.php");
?> 
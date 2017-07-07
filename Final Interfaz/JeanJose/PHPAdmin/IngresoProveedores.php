<?php
include('Conexion.php');

$idproveedor = $_POST['idproveedor'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];

if(empty($idproveedor) || empty($nombre) || empty($apellido) || empty($direccion) || empty($telefono)){
	header("Location: ../Proveedores.php");
	exit();
}

// Check connection
if (!$enlace) {
    die("Coneccion fallida: " . mysqli_connect_error());
}


$sql= "INSERT INTO proveedor (ID_PROVEEDOR, ID_ESTADO, NOMBRES_PROVEEDOR, DIRECCION_PROVEEDOR, TELEFONO_PROVEEDOR) VALUES ('".$idproveedor."', 'A', '".$nombre." ".$apellido."', '".$direccion."', '".$telefono."');";

if (mysqli_query($enlace, $sql)) {
    echo "Correcto";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
}

mysqli_close($enlace);// Cerramos la conexion con la base de datos
header("Location: ../Proveedores.php");
?>
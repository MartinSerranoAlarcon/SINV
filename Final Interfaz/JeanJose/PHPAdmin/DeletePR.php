<?php 
include('Conexion.php');

$buscar = $_POST['buscar'];

if(empty($buscar)){
	header("Location: ../Proveedores.php");
	exit();
}

// Check connection
if (!$enlace) {
    die("Coneccion fallida: " . mysqli_connect_error());
}

$sql = "UPDATE proveedor SET ID_ESTADO = 'D' WHERE ID_PROVEEDOR = '".$buscar."';";

if (mysqli_query($enlace, $sql)) {
    echo "Correcto";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
}

//echo $sql;

mysqli_close($enlace);// Cerramos la conexion con la base de datos
header("Location: ../Proveedores.php");
?> 
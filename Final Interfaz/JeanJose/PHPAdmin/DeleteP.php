<?php 
include('Conexion.php');

$buscar = $_POST['buscar'];

if(empty($buscar)){
	header("Location: ../Productos.php");
	exit();
}

// Check connection
if (!$enlace) {
    die("Coneccion fallida: " . mysqli_connect_error());
}

$sql = "UPDATE producto SET ID_ESTADO = 'D' WHERE ID_PRODUCTO = '".$buscar."';";

if (mysqli_query($enlace, $sql)) {
    echo "Correcto";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
}

//echo $sql;

mysqli_close($enlace);// Cerramos la conexion con la base de datos
header("Location: ../Productos.php");
?> 
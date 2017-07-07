<?php 
include('Conexion.php');

$cedula = $_POST['ced'];
$nombre = $_POST['nombre'];
$direccion = $_POST['dir'];
$telefono = $_POST['telf'];
$celular = $_POST['cel'];

if(empty($cedula) || empty($nombre) || empty($direccion) || empty($telefono) || empty($celular)){
		header("Location: ../Clientes.php");
		exit();
	}

// Check connection
if (!$enlace) {
    die("Coneccion fallida: " . mysqli_connect_error());
}

$sql = "UPDATE clientes SET NOMBRES_CLIENTE = '".$nombre."', DIRECCION_CLIENTE = '".$direccion."', TELEFONO_CLIENTE = '".$telefono."', CELULAR_CLIENTE = '".$celular."' WHERE clientes.ID_CLIENTE = '".$cedula."';";


if (mysqli_query($enlace, $sql)) {
    echo "Correcto";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
}

mysqli_close($enlace);// Cerramos la conexion con la base de datos
//echo 'Los datos han sido actualizados en la base de datos';
header("Location: ../Clientes.php");
?> 
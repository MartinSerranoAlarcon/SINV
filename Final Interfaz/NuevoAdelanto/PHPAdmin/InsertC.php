<?php 
include('Conexion.php');

$cedula = $_POST['ced'];
$nombre = $_POST['nom'];
$apellido = $_POST['ape'];
$direccion = $_POST['dir'];
$telefono = $_POST['tel'];
$celular = $_POST['cel'];

if(empty($cedula) || empty($nombre) || empty($apellido) || empty($direccion) || empty($telefono) || empty($celular)){
		header("Location: ../Clientes.php");
		exit();
	}

// Check connection
if (!$enlace) {
    die("Coneccion fallida: " . mysqli_connect_error());
}


$sql = "INSERT INTO clientes(ID_CLIENTE, ID_ESTADO, 
NOMBRES_CLIENTE, DIRECCION_CLIENTE,TELEFONO_CLIENTE, CELULAR_CLIENTE) VALUES ('".$cedula."','A', '".$nombre." ".$apellido."', '".$direccion."', '".$telefono."', '".$celular."')";


if (mysqli_query($enlace, $sql)) {
    echo "Correcto";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
}

mysqli_close($enlace);// Cerramos la conexion con la base de datos
//echo 'Los datos han sido insertados en la base de datos';
header("Location: ../Clientes.php");
?> 
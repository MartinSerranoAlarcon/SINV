<?php 
include('Conexion.php');

$id = $_POST['id'];
$placa= $_POST['placa'];
$marca = $_POST['marca'];
$modelo = $_POST['mode'];
$tipo = $_POST['tipo'];


if(empty($id) || empty($placa) || empty($marca) || empty($modelo) || empty($tipo)){
	header("Location: ../Transportes.php");
	exit();
}


// Check connection
if (!$enlace) {
    die("Coneccion fallida: " . mysqli_connect_error());
}

$sql = "UPDATE transporte SET PLACA_TRANSPORTE = '".$placa."', MARCA_TRANSPORTE = '".$marca."', MODELO_TRANSPORTE = '".$modelo."', TIPO_TRANSPORTE = '".$tipo."' WHERE transporte.ID_TRANSPORTE = '".$id."';";


if (mysqli_query($enlace, $sql)) {
    echo "Correcto";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
}

//echo $sql;

mysqli_close($enlace);// Cerramos la conexion con la base de datos
//echo 'Los datos han sido actualizados en la base de datos';
header("Location: ../Transportes.php");
?> 
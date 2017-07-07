<?php 
include('Conexion.php');

$id = $_POST['id'];
$placa= $_POST['placa'];
$marca = $_POST['marca'];
$modelo = $_POST['mode'];
$tipo = $_POST['tipo'];



/*if(empty($ID_Transporte) || empty($placa) || empty($marca) || empty($modelo)){
		header("Location: ../Transportes.php");
		exit();
	}*/

// Check connection
if (!$enlace) {
    die("Coneccion fallida: " . mysqli_connect_error());
}


$sql = "INSERT INTO transporte(ID_TRANSPORTE, ID_ESTADO, PLACA_TRANSPORTE, MARCA_TRANSPORTE, MODELO_TRANSPORTE, TIPO_TRANSPORTE ) VALUES ('".$id."','L', '".$placa."', '".$marca."', '".$modelo."', '".$tipo."')";


//echo $sql;
if (mysqli_query($enlace, $sql)) {
    echo "Correcto";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
}

mysqli_close($enlace);// Cerramos la conexion con la base de datos
//echo 'Los datos han sido insertados en la base de datos';
header("Location: ../Transportes.php");
?> 
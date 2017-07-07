<?php 
include('Conexion.php');

$proveedor = $_POST['proveedor'];
$cuota = $_POST['cuotas'];
$abono = $_POST['abono'];
$pago = $_POST['svalor'];
$fecha = $_POST['fecha'];
$factura = $_POST['factura'];
$idproveedor;


if(empty($proveedor) || empty($cuota) || empty($abono) || empty($pago) || empty($fecha) || empty($factura)){
	header("Location: ../Cuentas_Pagar.php");
	exit();
}

 
//Tabla Heredada 1
$consulta = "select ID_PROVEEDOR from proveedor where NOMBRES_PROVEEDOR = '".$proveedor."'";
			$result = mysqli_query($enlace, $consulta)or die(mysqli_error());
while ($row = mysqli_fetch_row($result)){ 
	$idproveedor = $row[0]; 
} 

// Check connection
if (!$enlace) {
    die("Coneccion fallida: " . mysqli_connect_error());
}

$sql = "UPDATE cuentasxpagar SET CUOTAS_CXP = '".$cuota."', PAGAR_CXP = '".$abono."', FECHA_CXP = '".$fecha."', VALOR_CXP = '".$pago."', FACTURA_CXP = '".$factura."' WHERE cuentasxpagar.ID_PROVEEDOR = '".$idproveedor."';";


if (mysqli_query($enlace, $sql)) {
    echo "Correcto";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
}

//echo $sql;

mysqli_close($enlace);// Cerramos la conexion con la base de datos
//echo 'Los datos han sido actualizados en la base de datos';
header("Location: ../Cuentas_Pagar.php");
?> 
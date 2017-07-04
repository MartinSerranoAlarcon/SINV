 <?php 
include('Conexion.php');

//$idproveedor = $_POST['nci'];
$proveedor = $_POST['proveedor'];
$cuota = $_POST['cuotas'];
$abono = $_POST['abono'];
$pago = $_POST['svalor'];
$fecha = $_POST['fecha'];
$factura = $_POST['factura'];
$idproveedor;

$estado;
$estadoa = $_POST['estadoa'];
$estadod = $_POST['estadod'];

if($estadoa == '1'){
	$estado = 'A';
	$estadod = '0';
} else if($estadod == '1'){
	$estado = 'D';
	$estadoa = '0';
} else {
	$estado = '';
	exit();
}

//Tabla Heredad 1
$consulta = "select ID_PROVEEDOR from proveedor where NOMBRES_PROVEEDOR = '".$proveedor."'";
	$result = mysqli_query($enlace, $consulta)or die(mysqli_error());
while ($row = mysqli_fetch_row($result)){ 
	$idproveedor = $row[0]; 
} 

$consulta = "select * from cuentasxpagar";
$result = mysqli_query($enlace, $consulta) or die(mysqli_error());
		$i = 1;
		while ($row = mysqli_fetch_row($result)){ 
			$i++;
		}
$idcxp  = $i;

if(empty($idproveedor) || empty($cuota) || empty($abono) || empty($pago) || empty($fecha) || empty($estado) || empty($factura)){
		header("Location: ../Cuentas_Pagar.php");
		exit();
	}

// Check connection
if (!$enlace) {
    die("Coneccion fallida: " . mysqli_connect_error());
}

$sql = "INSERT INTO cuentasxpagar(ID_CXP, ID_ESTADO, ID_PROVEEDOR, FACTURA_CXP, VALOR_CXP, PAGAR_CXP, CUOTAS_CXP, FECHA_CXP) VALUES ('".$idcxp."', '".$estado."', '".$idproveedor."', '".$factura."', '".$pago."', '".$abono."', '".$cuota."', '".$fecha."')";

if (mysqli_query($enlace, $sql)) {
    echo "Correcto";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
}

mysqli_close($enlace);// Cerramos la conexion con la base de datos
//echo 'Los datos han sido insertados en la base de datos';
header("Location: ../Cuentas_Pagar.php");
?> 
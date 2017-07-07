 <?php 
include('Conexion.php');

$idorden = $_POST['numorden'];
$valor = $_POST['valor'];
$abono = $_POST['abono'];
$fecha = $_POST['fecha'];
$cuota = $_POST['cuota'];

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

$consulta = "select * from cuentasxcobrar";
$result = mysqli_query($enlace, $consulta) or die(mysqli_error());
		$i = 1;
		while ($row = mysqli_fetch_row($result)){ 
			$i++;
		}
$idcxc = $i;

if(empty($idorden) || empty($valor) || empty($abono) || empty($fecha) || empty($cuota) || empty($estado)){
		header("Location: ../Cuentas_Cobra.php");
		exit();
	}

// Check connection
if (!$enlace) {
    die("Coneccion fallida: " . mysqli_connect_error());
}


$sql = "INSERT INTO cuentasxcobrar (ID_CXC, ID_ESTADO, ID_ORDEN, VALOR_CXC, COBRAR_CXC, CUOTAS_CXC, FECHA_CXC) VALUES ('".$idcxc."', '".$estado."', '".$idorden."', '".$valor."', '".$abono."', '".$cuotas."', '".$fecha."')";

if (mysqli_query($enlace, $sql)) {
    echo "Correcto";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
}

mysqli_close($enlace);// Cerramos la conexion con la base de datos
//echo 'Los datos han sido insertados en la base de datos';
header("Location: ../Cuentas_Cobra.php");
?> 
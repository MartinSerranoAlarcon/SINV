<?php 
include('Conexion.php');

$idusu = $_POST['idusu'];
$nom = $_POST['nombre'];
$usuario = $_POST['usu'];
$pass = $_POST['pass'];
$tipousu = $_POST['usua'];
$idtipousu;

//echo $_POST['usua'].' es';
// Check connection
if (!$enlace) {
    die("Coneccion fallida: " . mysqli_connect_error());
}
//Tabla Heredadas 1
$consulta = "SELECT ID_TIPOUSUARIO FROM tipo_usuario WHERE NOMBRE_TIPOUSUARIO = '".$tipousu."'";
	$result = mysqli_query($enlace, $consulta)or die(mysqli_error());
while ($row = mysqli_fetch_row($result)){ 
	$idtipousu = $row[0]; 
}

$sql = "UPDATE usuario SET ID_TIPOUSUARIO = '".$idtipousu."', NOMBRES_USUARIO = '".$nom."', USER_USUARIO = '".$usuario."', PASS_USUARIO= '".$pass."' WHERE ID_USUARIO = '".$idusu."';";


if (mysqli_query($enlace, $sql)) {
    echo "Correcto";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
}

//echo $tipousu.'<br> aa <br>';
//echo $sql;

mysqli_close($enlace);// Cerramos la conexion con la base de datos
//echo 'Los datos han sido actualizados en la base de datos';
header("Location: ../Usuarios.php");
?> 
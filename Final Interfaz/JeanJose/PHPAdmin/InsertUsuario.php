<?php 
include('Conexion.php');

$idusu = $_POST['idusu'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usu'];
$password = $_POST['pass'];
$tipousu = $_POST['usuario'];
$idtipousu;

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

if(empty($idusu) || empty($nombre) || empty($apellido) || empty($usuario) || empty($password) || empty($idtipousu)){
	header("Location: ../Usuarios.php");
	exit();
}

$sql = "INSERT INTO usuario (ID_USUARIO, ID_ESTADO, ID_TIPOUSUARIO, NOMBRES_USUARIO, USER_USUARIO, PASS_USUARIO) VALUES ('".$idusu."', 'A', '".$idtipousu."', '".$nombre." ".$apellido."', '".$usuario."', '".$password."');";


if (mysqli_query($enlace, $sql)) {
    echo "Correcto";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
}

mysqli_close($enlace);// Cerramos la conexion con la base de datos
header("Location: ../Usuarios.php");
?> 
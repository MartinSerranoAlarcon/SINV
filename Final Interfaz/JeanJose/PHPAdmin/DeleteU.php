<?php 
include('Conexion.php');

$buscar = $_POST['buscar'];

// Check connection
if (!$enlace) {
    die("Coneccion fallida: " . mysqli_connect_error());
}

$sql = "UPDATE usuario SET ID_ESTADO = 'D' WHERE ID_USUARIO = '".$buscar."';";


if (mysqli_query($enlace, $sql)) {
    echo "Correcto";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
}

mysqli_close($enlace);// Cerramos la conexion con la base de datos
header("Location: ../Usuarios.php");
?> 
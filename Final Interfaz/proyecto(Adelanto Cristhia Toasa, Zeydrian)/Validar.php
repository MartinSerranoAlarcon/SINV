<?php
	$hostname = "localhost";
	$database = "prueba";
	$user = "root";
	$password = "";
	
	$usuario = $_POST['nnombre'];
	$pass = $_POST['npassword'];
	
	if(empty($usuario) || empty($pass)){
		header("Location: Index.php");
		exit();
	}
	
	$enlace = mysqli_connect($hostname,$user,$password) or die("Error al conectar " . mysqli_error());
	mysqli_select_db($enlace, $database) or die ("Error al seleccionar la Base de datos: " . mysqli_error());
	
	$consulta = "select * from usuario where usu='" . $usuario . "'";
	$result = mysqli_query($enlace, $consulta)or die(mysqli_error());
	if($row = mysqli_fetch_array($result)){
		//print_r($row);
		if($row[pass] == $pass){
			session_start();
			$_SESSION['usuario'] = $usuario;
			header("Location: Inicio.php");
		}else{
			header("Location: Index.php");
			exit();
		}
	}else{
		header("Location: Index.php");
		exit();
	}
?>
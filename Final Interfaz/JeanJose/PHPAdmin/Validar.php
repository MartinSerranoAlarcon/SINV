<?php
	include('Conexion.php');
	
	$usuario = $_POST['nnombre'];
	$pass = $_POST['npassword'];
	$tipousu;
	
	if(empty($usuario) || empty($pass)){
		header("Location: ../Login.php");
		exit();
	}
	
	$consulta = "select * from usuario where USER_USUARIO='" . $usuario . "'";
	$result = mysqli_query($enlace, $consulta)or die(mysqli_error());
	if($row = mysqli_fetch_array($result)){
		//print_r($row);
		if($row[PASS_USUARIO] == $pass && $row[ID_TIPOUSUARIO] == 1 && $row[ID_ESTADO] == 'A'){
			session_start();
			$_SESSION['tipo'] = $row[ID_TIPOUSUARIO];
			$_SESSION['usuario'] = $usuario;
			$_SESSION['entra1'] = true;
			header("Location: ../Administrador.php");
		}else if($row[PASS_USUARIO] == $pass && $row[ID_TIPOUSUARIO] == 2 && $row[ID_ESTADO] == 'A'){
			session_start();
			$_SESSION['tipo'] = $row[ID_TIPOUSUARIO];
			$_SESSION['usuario'] = $usuario;
			$_SESSION['entra2'] = true;
			header("Location: ../Bodega.php");
		}else if($row[PASS_USUARIO] == $pass && $row[ID_TIPOUSUARIO] == 3 && $row[ID_ESTADO] == 'A'){
			session_start();
			$_SESSION['tipo'] = $row[ID_TIPOUSUARIO];
			$_SESSION['usuario'] = $usuario;
			$_SESSION['entra3'] = true;
			header("Location: ../Manteleria.php");
		}else if($row[PASS_USUARIO] == $pass && $row[ID_TIPOUSUARIO] == 4 && $row[ID_ESTADO] == 'A'){
			session_start();
			$_SESSION['tipo'] = $row[ID_TIPOUSUARIO];
			$_SESSION['usuario'] = $usuario;
			$_SESSION['entra4'] = true;
			header("Location: ../Oficina.php");
		}else if($row[PASS_USUARIO] == $pass && $row[ID_TIPOUSUARIO] == 5 && $row[ID_ESTADO] == 'A'){
			session_start();
			$_SESSION['tipo'] = $row[ID_TIPOUSUARIO];
			$_SESSION['usuario'] = $usuario;
			$_SESSION['entra5'] = true;
			header("Location: ../Secretaria.php");
		}else{
			header("Location: ../Login.php");
			exit();
		}
	}else{
		header("Location: ../Login.php");
		exit();
	}
mysqli_close($enlace);// Cerramos la conexion con la base de datos

?>
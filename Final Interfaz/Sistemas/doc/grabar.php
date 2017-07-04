<?php
// modificacion de datos
	if(isset($_POST['identificadorc'])) {
		$identificador = $_POST['identificadorc'];
		$fecha = $_POST['fecha'];
		$hora = $_POST['hora'];
				
		$conexion = mysqli_connect('localhost', 'root', '', 'pacientes') or die('No se pudo conectar a la bdd.');
		$consulta = "update cita set fec_cita = '$fecha', hora_cita = '$hora' where id_cita= $identificador";
		
		$resultados = mysqli_query($conexion, $consulta);
		
		
		if ($resultados != false) {
			header('Location:cita.php');
		} else {
			$mensaje_error = "No se ha podido realizar la modificaci&oacute;n de datos.";
		}	
	} else {
		
	}
        if(isset($_POST['identificadord'])) {
		$identificador = $_POST['identificadord'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$fnac = $_POST['fnac'];
		$sex = $_POST['sex'];
		$telefono = $_POST['telefono'];
		$celular = $_POST['celular'];
		$doc = $_POST['doc'];

		
		$conexion = mysqli_connect('localhost', 'root', '', 'pacientes') or die('No se pudo conectar a la bdd.');
		$consulta = "update personal set nombre_per = '$nombre',apellidos_per = '$apellido',fnac_per = '$fnac',sexo_per = '$sex',telf_per = '$telefono',cel_per = '$celular',id_cargo_fk = '$doc' where id_per = $identificador";
		
		$resultados = mysqli_query($conexion, $consulta);
		
		if ($resultados != false) {
			header('Location:doctor.php');
		} else {
			$mensaje_error = "No se ha podido realizar la modificaci&oacute;n de datos.";
		}	
	} else {
		
	}
        if(isset($_POST['identificadorp'])) {
		$identificador = $_POST['identificadorp'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$direccion = $_POST['direccion'];
		$telefono = $_POST['telefono'];
                $celular = $_POST['celular'];
		$fnac = $_POST['fnac'];
		$sex = $_POST['sex'];
		$mail = $_POST['mail'];

		
		$conexion = mysqli_connect('localhost', 'root', '', 'pacientes') or die('No se pudo conectar a la bdd.');
		$consulta = "update cliente set nombres_cli = '$nombre',apellidos_cli = '$apellido',fnac_cli = '$fnac',sexo = '$sex',dir_cli = '$direccion',telf_cli = '$telefono',celu_cli = '$celular',email_cli = '$mail' where id_cli = $identificador";
		
		$resultados = mysqli_query($conexion, $consulta);
		
				
		if ($resultados != false) {
			header('Location:paciente.php');
		} else {
			$mensaje_error = "No se ha podido realizar la modificaci&oacute;n de datos.";
		}	
	} else {
		
	}
        
//ingreso de datos
	if(isset($_POST['nuevoc'])) {
		
		$fechacita = $_POST['fcita'];
		$hora = $_POST['hora'];
		$cedula = $_POST['cedula'];
		$doctor = $_POST['doc'];
		
		$conexion = mysqli_connect('localhost', 'root', '', 'pacientes') or die('No se pudo conectar a la bdd.');
		$consulta = "insert into cita (fec_cita,hora_cita,id_per_fk,id_cli_fk) values('".$fechacita."','".$hora."','".$doctor."','".$cedula."')";
		$resultados = mysqli_query($conexion, $consulta);
		
		if ($resultados != false) {
			header('Location:cita.php');
		} else {
			$mensaje_error = "No se ha podido realizar.";
		}	
	} else {
		
	}
if(isset($_POST['nuevod'])) {
		$cedula = $_POST['cedula'];
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $fnac = $_POST['fnac'];
		$sex = $_POST['sex'];
		//$direccion = $_POST['direccion'];
		$telefono = $_POST['telefono'];
                $celular = $_POST['celular'];
                $mail = $_POST['mail'];
		$doctor = $_POST['doc'];
		
		$conexion = mysqli_connect('localhost', 'root', '', 'pacientes') or die('No se pudo conectar a la bdd.');
		$consulta = "insert into personal (id_per,nombre_per,apellidos_per,fnac_per,sexo_per,id_cargo_fk,telf_per,cel_per) values('".$cedula."','".$nombre."','".$apellido."','".$fnac."','".$sex."','".$doctor."','".$telefono."','".$celular."')";
		$resultados = mysqli_query($conexion, $consulta);
		
		if ($resultados != false) {
			header('Location:doctor.php');
		} else {
			$mensaje_error = "No se ha podido realizar.";
		}	
	} else {
		
	}
if(isset($_POST['nuevop'])) {
		$cedula = $_POST['cedula'];
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $fnac = $_POST['fnac'];
		$sex = $_POST['sex'];
		$direccion = $_POST['direccion'];
		$telefono = $_POST['telefono'];
                $celular = $_POST['celular'];
                $mail = $_POST['mail'];
		
		
		$conexion = mysqli_connect('localhost', 'root', '', 'pacientes') or die('No se pudo conectar a la bdd.');
		$consulta = "insert into cliente (id_cli,nombres_cli,apellidos_cli,fnac_cli,sexo,dir_cli,telf_cli,celu_cli,email_cli) values('".$cedula."','".$nombre."','".$apellido."','".$fnac."','".$sex."','".$direccion."','".$telefono."','".$celular."','".$mail."')";
		$resultados = mysqli_query($conexion, $consulta);
		
		if ($resultados != false) {
			header('Location:paciente.php');
		} else {
			$mensaje_error = "No se ha podido realizar.";
		}	
	} else {
		
	}

// borrar de datos
	if(isset($_POST['borrarp'])) {
		$borrar = $_POST['borrarp'];
		$nombre = $_POST['nombre'];
		
		$conexion = mysqli_connect('localhost', 'root', '', 'pacientes') or die('No se pudo conectar a la bdd.');
		$consulta = "delete from cliente where id_cli= ".$borrar;
		$resultados = mysqli_query($conexion, $consulta);
		
		if ($resultados != false) {
			header('Location:paciente.php');
		} else {
			$mensaje_error = "No se ha podido realizar la eliminaci&oacute;n de datos.";
		}	
	} else {
		
	}
if(isset($_POST['borrard'])) {
		$borrar = $_POST['borrard'];
		$nombre = $_POST['nombre'];
		
		$conexion = mysqli_connect('localhost', 'root', '', 'pacientes') or die('No se pudo conectar a la bdd.');
		$consulta = "delete from personal where id_per= ".$borrar;
		$resultados = mysqli_query($conexion, $consulta);
		
		if ($resultados != false) {
			header('Location:doctor.php');
		} else {
			$mensaje_error = "No se ha podido realizar la eliminaci&oacute;n de datos.";
		}	
	} else {
		
	}
if(isset($_POST['borrarc'])) {
		$borrar = $_POST['borrarc'];
		$nombre = $_POST['nombre'];
		
		$conexion = mysqli_connect('localhost', 'root', '', 'pacientes') or die('No se pudo conectar a la bdd.');
		$consulta = "delete from cita where id_cita= ".$borrar;
		$resultados = mysqli_query($conexion, $consulta);
		
		if ($resultados != false) {
			header('Location:cita.php');
		} else {
			$mensaje_error = "No se ha podido realizar la eliminaci&oacute;n de datos.";
		}	
	} else {
		
	}

	
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>grabar</title>
	</head>
	<body>
		<?php echo $mensaje_error . " - " . mysqli_error($conexion); ?>
	</body>
	
	
	<?php mysqli_close($conexion); ?>
</html>


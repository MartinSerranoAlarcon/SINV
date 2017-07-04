<?php 
		include('Conexion.php');
			$consulta = "select NOMBRE_TIPOUSUARIO from tipo_usuario";
			$result = mysqli_query($enlace, $consulta)or die(mysqli_error());
while ($row = mysqli_fetch_row($result)){ 
	echo "<option>$row[0]</option>"; 
} 
mysqli_close($enlace);// Cerramos la conexion con la base de datos
?> 
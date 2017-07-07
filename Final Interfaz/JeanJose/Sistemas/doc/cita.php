                    	<?php include_once('conexion.php'); ?>
            <?php include_once('funciones.php'); ?>
			<?php require_once('encabezado.php'); //es obligatorio ?>
            <?php include_once('menu.php'); ?>
            <?php require_once('lateral.php'); ?>
            <?php
		$conexion1 = mysqli_connect('localhost', 'root', '', 'pacientes') or die('No se pudo conectar a la bdd.');
		$consulta1 = "SELECT id_cita, fec_cita, hora_cita, cliente.nombres_cli, apellidos_cli, nombre_per, apellidos_per
FROM cliente, personal, cita
where id_cli_fk=id_cli and id_per_fk=id_per
ORDER BY id_cita";
		$resultados1 = mysqli_query($conexion1, $consulta1);
?>
            
			<div id="contenido">
		<table>
			<tr>
				<th>Cita para Pacientes</th>
			</tr>
                                                <tr>
				<td><a href='newc.php'><img src='icons/createdate.png' width='50px'/>Nueva Cita</a></td>
			</tr>

			<tr class="yellow">
				<th># CITA</th>
				<th>FECHA CITA</th>
                                <th>HORA</th>
                                <th colspan='2'>PACIENTE</th>
                                <th colspan='2'>DOCTOR</th>
				<th>Editar</th>
				<th>Borrar</th>
			</tr>
		<?php
		if ($resultados1 != false) {
			while($fila1 = mysqli_fetch_array($resultados1)) {
				echo "<tr><td>" . $fila1[id_cita] . "</td>";
				echo "<td>" . $fila1['fec_cita'] . "</td>";
                                echo "<td>" . $fila1['hora_cita'] . "</td>";
                                echo "<td>" . $fila1['nombres_cli'] . "</td>";
                                echo "<td>" . $fila1['apellidos_cli'] . "</td>";
				echo "<td>" . $fila1['nombre_per'] . "</td>";
                                echo "<td>" . $fila1['apellidos_per'] . "</td>";
				
				echo "<td><a href='editc.php?id=" . $fila1['id_cita'] . "'><img src='icons/edituser.jpg' width='20px'/></a></td> ";
				echo "<td><a href='delc.php?id=" . $fila1['id_cita'] . "'><img src='icons/removeuser.jpg' width='20px'/></a></td>";
			
		?>
			
		<?php	
			}
		}		
		?>
		</table>

			</div>
            <?php include_once('pie.php'); ?>
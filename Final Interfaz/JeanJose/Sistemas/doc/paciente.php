                    	<?php include_once('conexion.php'); ?>
            <?php include_once('funciones.php'); ?>
			<?php require_once('encabezado.php'); //es obligatorio ?>
            <?php include_once('menu.php'); ?>
            <?php require_once('lateral.php'); ?>
            <?php
		$conexion1 = mysqli_connect('localhost', 'root', '', 'pacientes') or die('No se pudo conectar a la bdd.');
		$consulta1 = "select id_cli, nombres_cli, apellidos_cli from cliente  order by apellidos_cli";
		$resultados1 = mysqli_query($conexion1, $consulta1);
?>
            
			<div id="contenido">
		<table>
			<tr>
				<th>LISTA DE PACIENTES REGISTRADOS</th>
			</tr>
                        <tr>
				<td><a href='newp.php'><img src='icons/createuser.png' width='50px'/>Nuevo Paciente</a></td>
			</tr>
			<tr class="yellow">
				<th>CEDULA</th>
				<th>NOMBRES</th>
                                <th>APELLIDOS</th>
                                
				<th>Editar</th>
				<th>Borrar</th>
			</tr>
		<?php
		if ($resultados1 != false) {
			while($fila1 = mysqli_fetch_array($resultados1)) {
				echo "<tr><td>" . $fila1['id_cli'] . "</td>";
				echo "<td>" . $fila1['nombres_cli'] . "</td>";
				echo "<td>" . $fila1['apellidos_cli'] . "</td>";
				echo "<td><a href='editp.php?id=" . $fila1['id_cli'] . "'><img src='icons/edituser.jpg' width='20px'/></a></td> ";
				echo "<td><a href='delp.php?id=" . $fila1['id_cli'] . "'><img src='icons/removeuser.jpg' width='20px'/></a></td>";
			
		?>
			
		<?php	
			}
		}		
		?>
		</table>

			</div>
            <?php include_once('pie.php'); ?>
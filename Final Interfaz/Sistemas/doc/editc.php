
			<?php include_once('conexion.php'); ?>
            <?php include_once('funciones.php'); ?>
			<?php require_once('encabezado.php'); //es obligatorio ?>
            <?php include_once('menu.php'); ?>
            <?php require_once('lateral.php'); ?>
         
<?php
			if(isset($_GET['id'])) {
		    	$identificador = $_GET['id'];
				$conexion = mysqli_connect('localhost', 'root', '', 'pacientes') or die('No se pudo conectar a la bdd.');	
				$consulta = "select * from cita where id_cita = $identificador";
			    $resultados = mysqli_query($conexion, $consulta);
				if (mysqli_num_rows($resultados) > 0) {
					$fila = mysqli_fetch_array($resultados);	
		?>
            
			<div id="contenido">

<h1>Edicion de Citas</h1>
						<form method="post" action="grabar.php">
                        <p><label >Numero de cita:  <?php echo $fila['cita'] ?> </label> </p>
							<p><label for="fecha">Fecha Cita:</label><input type="text" name="fecha" id="fecha" value="<?php echo $fila['fec_cita'] ?>" /></p>
                            <p><label for="hora">Hora Cita:</label><input type="text" name="hora" id="hora" value="<?php echo $fila['hora_cita'] ?>" /></p>
			
							<p><input type="submit" value="Guardar" name="submit" id="submit" /></p>
							<input type="hidden" name="identificadorc" id="identificadorc" value="<?php echo $fila['id_cita'] ?>" />
						</form>

<?php
				}
			} else {
		}
		?>
			</div>
            <?php include_once('pie.php'); ?>

                            
		
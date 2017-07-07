			<?php include_once('conexion.php'); ?>
            <?php include_once('funciones.php'); ?>
			<?php require_once('encabezado.php'); //es obligatorio ?>
            <?php include_once('menu.php'); ?>
            <?php require_once('lateral.php'); ?>
  
            
			<div id="contenido">
<?php
			if(isset($_GET['id'])) {
		    	$identificador = $_GET['id'];
				$conexion = mysqli_connect('localhost', 'root', '', 'pacientes') or die('No se pudo conectar a la bdd.');	
				$consulta = "select * from personal where id_per = $identificador";
			    $resultados = mysqli_query($conexion, $consulta);
				if (mysqli_num_rows($resultados) > 0) {
					$fila = mysqli_fetch_array($resultados);
				
		?>
					<div id="container">
						<h1>Eliminacion de Reserva</h1>
						<form method="post" action="grabar.php">
							<p><label for="name">Nombre:</label><input type="text" name="nombre" id="nombre" value="<?php echo $fila['nombre_per'] ?>" /></p>
							
							<p><input type="submit" value="eliminar" name="submit" id="submit" /></p>
							<input type="hidden" name="borrard" id="borrard" value="<?php echo $fila['id_per'] ?>" />
						</form>
					</div>
		<?php
				}
			} else {
		?>
		    
		<?php
			}
		?>
			</div>
            <?php include_once('pie.php'); ?>

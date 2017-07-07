
			<?php include_once('conexion.php'); ?>
            <?php include_once('funciones.php'); ?>
			<?php require_once('encabezado.php'); //es obligatorio ?>
            <?php include_once('menu.php'); ?>
            <?php require_once('lateral.php'); ?>
         
<?php
			if(isset($_GET['id'])) {
		    	$identificador = $_GET['id'];
				$conexion = mysqli_connect('localhost', 'root', '', 'pacientes') or die('No se pudo conectar a la bdd.');	
				$consulta = "select * from cliente where id_cli = $identificador";
			    $resultados = mysqli_query($conexion, $consulta);
				if (mysqli_num_rows($resultados) > 0) {
					$fila = mysqli_fetch_array($resultados);	
		?>
            
			<div id="contenido">

<h1>Edicion de Pacientes</h1>
						<form method="post" action="grabar.php">
                        <p><label for="cedula">Cedula:</label><input type="text" name="cedula" id="cedula" value="<?php echo $fila['id_cli'] ?>" /></p>
							<p><label for="nombre">Nombres:</label><input type="text" name="nombre" id="nombre" value="<?php echo $fila['nombres_cli'] ?>" /></p>
                                                        <p><label for="apellido">Apellidos:</label><input type="text" name="apellido" id="apellido" value="<?php echo $fila['apellidos_cli'] ?>" /></p>
                                                        <p><label for="fnac">Fecha de naciemiento:</label><input type="text" name="fnac" id="fnac" value="<?php echo $fila['fnac_cli'] ?>" />(AAAA-MM-DD)</p>
                                                        <p>Sexo: 
                                                        <SELECT NAME="sex" SIZE=1 > 
                                                        <OPTION VALUE="">       </OPTION>    
                                                        <OPTION VALUE="M">MASCULINO</OPTION>
                                                        <OPTION VALUE="F">FEMENINO</OPTION>
                                                        </SELECT></p>
                                                        <p><label for="direccion">Direccion:</label><input type="text" name="direccion" id="direccion" value="<?php echo $fila['dir_cli'] ?>" /></p>
							<p><label for="telefono">Telefono Casa:</label><input type="text" name="celular" id="telefono" value="<?php echo $fila['telf_cli'] ?>" /></p>
                                                        <p><label for="celular">Telefono Celular:</label><input type="text" name="mail" id="celular" value="<?php echo $fila['celu_cli'] ?>" /></p>
                                                        <p><label for="mail">Email:</label><input type="text" name="mail" id="mail" value="<?php echo $fila['email_cli'] ?>" /></p>
							<p><input type="submit" value="Guardar" name="submit" id="submit" /></p>
							<input type="hidden" name="identificadorp" id="identificadorp" value="<?php echo $fila['id_cli'] ?>" />
						</form>

<?php
				}
			} else {
		}
		?>
			</div>
            <?php include_once('pie.php'); ?>

                            
		
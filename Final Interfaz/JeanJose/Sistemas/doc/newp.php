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

<h1>Ingreso de Pacientess</h1>
						<form method="post" action="grabar.php">
                        <p><label for="cedula">Cedula:</label><input type="text" name="cedula" id="cedula" value="" /></p>
							<p><label for="nombre">Nombres:</label><input type="text" name="nombre" id="nombre" value="" /></p>
                                                        <p><label for="apellido">Apellidos:</label><input type="text" name="apellido" id="apellido" value="" /></p>
                                                        <p><label for="fnac">Fecha de naciemiento:</label><input type="text" name="fnac" id="fnac" value="" />(AAAA-MM-DD)</p>
                                                        <p>Sexo: 
                                                        <SELECT NAME="sex" SIZE=1 > 
                                                        <OPTION VALUE="">       </OPTION>    
                                                        <OPTION VALUE="M">MASCULINO</OPTION>
                                                        <OPTION VALUE="F">FEMENINO</OPTION>
                                                        </SELECT></p>
                                                        <p><label for="direccion">Direccion:</label><input type="text" name="direccion" id="direccion" value="" /></p>
							<p><label for="telefono">Telefono Casa:</label><input type="text" name="celular" id="telefono" value="" /></p>
                                                        <p><label for="celular">Telefono Celular:</label><input type="text" name="mail" id="celular" value="" /></p>
                                                        <p><label for="mail">Email:</label><input type="text" name="mail" id="mail" value="" /></p>
                                                        <p><input type="submit" value="Guardar" name="submit" id="submit" /></p>
							<input type="hidden" name="nuevop" id="nuevop" value="" />
						</form>

			</div>
            <?php include_once('pie.php'); ?>

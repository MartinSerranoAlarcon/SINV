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

<h1>Ingreso de Doctores</h1>
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
                                                        
							<p><label for="telefono">Telefono Casa:</label><input type="text" name="telefono" id="telefono" value="" /></p>
                                                        <p><label for="celular">Telefono Celular:</label><input type="text" name="celular" id="celular" value="" /></p>
                                                        
                                                        <p> Cargo:
                                                        <SELECT NAME="doc" SIZE=1 >
                                                            <OPTION VALUE="">       </OPTION>
            <?php
		$conexion2 = mysqli_connect('localhost', 'root', '', 'pacientes') or die('No se pudo conectar a la bdd.');
                $consulta2 = "select id_cargo, cargo from cargo order by cargo"; 
                $resultados2 = mysqli_query($conexion2, $consulta2);
                if ($resultados2 != false) {
			while($fila1 = mysqli_fetch_array($resultados2)) {
                    echo "<OPTION VALUE=" . $fila1['id_cargo'] .">". $fila1['cargo'] ."</OPTION></p>";//,
                    }
                    
                    
                ?>
                                                            </SELECT>
							<p><input type="submit" value="Guardar" name="submit" id="submit" /></p>
							<input type="hidden" name="nuevod" id="nuevod" value="" />
						</form>

			</div>
            <?php  } include_once('pie.php'); ?>

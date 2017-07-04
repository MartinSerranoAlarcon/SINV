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

<h1>Ingreso de Citas Medicas</h1>
						<form method="post" action="grabar.php">
                                                        <p><label for="fcita">Fecha de Cita:</label><input type="text" name="fcita" id="fcita" value="" />(AAAA-MM-DD)</p>
                                                        <p><label for="hora">Hora de Cita:</label><input type="text" name="hora" id="hora" value="" /></p>
                                                        <br>
                        <p>Datos Paciente</p>
							<p><label for="cedula">Cedula:</label><input type="text" name="cedula" id="cedula" value="" /></p>
                                                        <br>
                        <p>Datos Doctor</p>
                        
                        <p> Nombre:  
                                                        <SELECT NAME="doc" SIZE=1 >
                                                            <OPTION VALUE="">       </OPTION>
            <?php
		$conexion2 = mysqli_connect('localhost', 'root', '', 'pacientes') or die('No se pudo conectar a la bdd.');
                $consulta2 = "select id_per, nombre_per, apellidos_per from personal  order by apellidos_per"; 
                $resultados2 = mysqli_query($conexion2, $consulta2);
                if ($resultados2 != false) {
			while($fila1 = mysqli_fetch_array($resultados2)) {
                    echo "<OPTION VALUE=" . $fila1['id_per'] .">". $fila1['nombre_per'] ." ". $fila1['apellidos_per'] . "</OPTION></p>";//,
                    }
                    
                    
                ?>
            <!--<OPTION VALUE="TRVL">TRAVEL</OPTION>-->

        </SELECT>
                            				
                            
							<p><input type="submit" value="Guardar" name="submit" id="submit" /></p>
							<input type="hidden" name="nuevoc" id="nuevoc" value="" />
						</form>

			</div>
            
<?php 
}
include_once('pie.php'); ?>


			<?php include_once('conex.php'); ?>
           	<?php require_once('encabezado.php'); //es obligatorio ?>
            <?php require_once('lateral.php'); ?>
                        <?php
						error_reporting(E_ERROR);
                        $year = date(Y);
                        $month = date(m);
                        $day = date(d);
                        ?>
            
			<div id="contenido">

<h1>Consulta de Traspasos</h1>
	<form method="post" action="grabar.php">
        <p>AÑO  <select name="year">
            <option value="2012">2012</option>
            <option value="2013">2013</option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
        </SELECT>    
        <SELECT NAME="mes" SIZE=1 >
        <OPTION></OPTION>
        <OPTION VALUE="01">ENERO</OPTION>
        <OPTION VALUE="02">FEBRERO</OPTION>
        <OPTION VALUE="03">MARZO</OPTION>
        <OPTION VALUE="04">ABRIL</OPTION>
        <OPTION VALUE="05">MAYO</OPTION>
        <OPTION VALUE="06">JUNIO</OPTION>
        <OPTION VALUE="07">JULIO</OPTION>
        <OPTION VALUE="08">AGOSTO</OPTION>
        <OPTION VALUE="09">SEPTIEMBRE</OPTION>
        <OPTION VALUE="10">OCTUBRE</OPTION>
        <OPTION VALUE="11">NOVIEMBRE</OPTION>
        <OPTION VALUE="12">DICIEMBRE</OPTION>
        </SELECT>
        <!--<p><label for="fecha">FECHA: </label><input type="text" name="fecha" size="10" id="nombre" value="<?php echo $year."-".$month."-".$day ?>" /></p>-->
        <p>TIENDA:  <select name="tienda">
            <option value="T03">QUICENTRO NORTE</option>
            <option value="T06">SAN FRANCISCO</option>
            <option value="T07">JARDIN</option>
            <option value="T08">RECREO</option>
            <option value="T12">MATRIZ</option>
            <option value="T15">CEIBOS</option>
            <option value="T16">MALL DEL SOL</option>
            <option value="T21">LIBERTAD</option>
            <option value="T29">MANTA</option>
            <option value="T32">MILAGRO</option>
            <option value="T33">BABAHOYO</option>
            <option value="T35">BOSQUE</option>
            <option value="T38">PORTOVIEJO</option>
            <option value="T51">MALL DEL SUR</option>
            <option value="T65">SAN LUIS</option>
            <option value="T68">CONDADO</option>
            <option value="T75">VILLAGE PLAZA</option>
            <option value="T76">QUICENTRO SUR</option>
            <option value="T79">POLICENTRO</option>
            <option value="T81">CITY MALL</option>
            <option value="T82">SCALA</option>
            
        </select></p>
        <p><input type="submit" value="Consultar" name="submit" id="submit" /></p>
	<input type="hidden" name="c3" id="c3" value="" />
	</form>

<?php
                
			/*	}
			 else {
		}*/
		?>
			</div>
            

                            
		
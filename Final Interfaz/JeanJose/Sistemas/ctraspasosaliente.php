
			<?php include_once('conex.php'); ?>
           	<?php require_once('encabezado.php'); //es obligatorio ?>
            <?php require_once('menu.php'); ?>
                        <?php
						error_reporting(E_ERROR);
                        $year = date(Y);
                        $month = date(m);
                        $day = date(d);
                        ?>
            
			<div id="contenido">
<center>
<h1>Consulta de Traspasos Salientes</h1></center>
	<form method="post" action="grabar.php">
        
            <p><center>AÑO  <select name="year">
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
        </center>
        </p>
        <p><center><input type="submit" value="Consultar" name="submit" id="submit" /></center></p>
	<input type="hidden" name="c1" id="c1" value="" />
        
	</form>

<?php
                
			/*	}
			 else {
		}*/
		?>
			</div>
            

                            
		
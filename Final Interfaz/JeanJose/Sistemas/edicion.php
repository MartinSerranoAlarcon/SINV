
			<?php include_once('conex.php'); ?>
            
			<?php require_once('encabezado.php'); //es obligatorio ?>
                        <?php
                        $year = date(Y);
                        $month = date(m);
                        $day = date(d);
                        ?>
            
			<div id="contenido">

<h1>Eliminacion de Replica</h1>
	<form method="post" action="consultas.php">
                                                 
	<p><label for="nombre">Dato a borrar: </label><input type="text" name="repli" size="10" id="nombre" value="" /></p>
        
        <p><label for="fecha">FECHA: </label><input type="text" name="fecha" size="10" id="nombre" value="<?php echo $year."-".$month."-".$day ?>" /></p>
        <p>TIENDA:  <select name="tienda">
            <option value="T03">T03</option>
            <option value="T06">T06</option>
            <option value="T07">T07</option>
            <option value="T08">T08</option>
            <option value="T12">T12</option>
            <option value="T15">T15</option>
            <option value="T16">T16</option>
            <option value="T21">T21</option>
            <option value="T29">T29</option>
            <option value="T32">T32</option>
            <option value="T33">T33</option>
            <option value="T35">T35</option>
            <option value="T38">T38</option>
            <option value="T51">T51</option>
            <option value="T65">T65</option>
            <option value="T68">T68</option>
            <option value="T75">T75</option>
            <option value="T76">T76</option>
            <option value="T79">T79</option>
            <option value="T81">T81</option>
            <option value="T82">T82</option>
            
        </select></p>
        <p><input type="submit" value="Guardar" name="submit" id="submit" /></p>
	<input type="hidden" name="consultar" id="consulta" value="" />
	</form>

<?php
                
			/*	}
			 else {
		}*/
		?>
			</div>
            

                            
		
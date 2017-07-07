<link rel="stylesheet" href="estilos.css">
<link rel="stylesheet" href="fonts/style.css">
<?php
//conexion
include(conexion.php);

?>

<?php
	$sql=("SELECT placa_transporte FROM transporte");
	$buscar=mysqli_query($sql);
 while($dato = mysqli_fetch_array($query)){
	 echo
	"
	<table class=\"tb1\ width=\"100%\">
		<tbody>
        	<tr>
        		<td>".$dato['placa_transporte']." </td>
			</tr>
		</tbody>
	</table>
";
	}


?>


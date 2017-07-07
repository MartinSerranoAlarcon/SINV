<?php
//conexion


?>

<?php
//Consulta por producto
if(isset($_POST['btnconsultar']))
{
	$consultarodenes= $_POST['consultarordenes'];
	$sql=("SELECT id_producto, nombre_producto, cantidad_producto, precio_producto FROM producto WHERE nombre_producto = $nombreproducto");
	$buscar=mysqli_query($sql);
 while($dato = mysqli_fetch_array($query)){
	 echo
	"
<table border=\"1\">
		<tr>
			<td><b>Cantidad</b></td>
			<td><b>Descripción</b></td>
			<td><b>Estado</b></td>
		</tr>
		<tr>
		
			<td>Dato</td>
			<td>Dato</td>
		</tr>
		<tr>
		
			<td>Dato</td>
			<td>Dato</td>
		</tr>
	</table>
";
	}

}
?>


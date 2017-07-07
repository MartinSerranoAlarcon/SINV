<link rel="stylesheet" href="estilos.css">
<link rel="stylesheet" href="fonts/style.css">
<?php
//conexion
include('Conexion.php');
?>

<?php
//Consulta por producto
if(isset($_POST['btnconsultar']))
{
	$nombreproducto= $_POST['nombreproducto'];
	$sql=("SELECT id_producto, nombre_producto, cantidad_producto, precio_producto FROM producto WHERE nombre_producto = $nombreproducto");
	$buscar=mysqli_query($sql);
 while($dato = mysqli_fetch_array($query)){
	 echo
	"
	<table class=\"tb1\">
		<tbody>
        	<tr>
        		<td>".$dato['id_producto']." </td>
				<td>".$dato['nombre_producto']."</td>
                <td>".$dato['cantidad_producto']."</td>
                <td>".$dato['precio_producto']." </td>
            </tr>
		</tbody>
	</table>
";
	}

}
?>


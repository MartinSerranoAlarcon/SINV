<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,
maximum-scale=1.0, minimun-scale=1.0">
<link rel="stylesheet" href="estilos.css">
<link rel="stylesheet" href="fonts/style.css">
<?php
include 'Conexion.php';
 //Bariables de busquda
 $where = '';

//boton de busqueda
if (isset($_POST['btnBuscar'])) {
  $busqueda = $_POST['txtBusqueda'];
  $where = "where  P.NOMBRE_PRODUCTO like '".$busqueda."%'";
}
?>
<style>
    .Factura{
            margin:auto;
            margin-top:10px;
            width:100%;
            height:100%;
        }

</style>
</head>
<body background='Imagenes/background-1478187121.png'>
	<script type="text/javascript" src="factura.js"></script>
<header class="header">
	<div class="contenedor">
		<img src="Imagenes/Logo.png"  width=220 height=70>
		<h1 class="Titulo">Alquiler de Vajillas "Hilda Maria"</h1>
		<a href="Bodega.html" class="botonregresar" value="Regresar" onclick="" >
		<span class="icon-arrow-bold-left"></span>Regresar
	</a>
	</div>
</header>

<br>
<center><div class="Factura">

<br><hr><br>
<center><h1 class="Titulo">Busqueda de Productos</h1></center>
<form method="post">
  <table>
  	<td><h2>Ingresar el nombre del producto: <input type="text" id="direccioncliente" name="txtBusqueda" size="20px"></h2></td>
  	<td><center><a href="#" class="botonguardar" name="btnBuscar"><span class="icon-eye"></span>Buscar</a></center></td>
    <td><button type="submit" name="btnBuscar">Buscar</button></td>
  	</table>
</form>
	<br><br>
	<center><table class="tb1">
		<tr>
			<td><b>Producto</b></td>
			<td><b>Descripcion</b></td>
			<td><b>Cantidad</b></td>
			<td><b>Precio</b></td>
		</tr>
    <?php
    $mysqli = $enlace;

      if($consultaSQL = mysqli_query($mysqli, "select P.ID_PRODUCTO, P.NOMBRE_PRODUCTO, P.CANTIDAD_PRODUCTO, P.PRECIO_PRODUCTO FROM PRODUCTO P ".$where)){
        while ($filas = mysqli_fetch_array($consultaSQL)) {
            echo "
            <tr>
        			<td>".$filas['ID_PRODUCTO']."</td>
        			<td>".$filas['NOMBRE_PRODUCTO']."</td>
        			<td>".$filas['CANTIDAD_PRODUCTO']."</td>
        			<td>".$filas['PRECIO_PRODUCTO']."</td>
        		</tr>";
        }
      }
     ?>
	</table></center>
<center><a href="#" class="botonimprimir">
		<span class="icon-print"></span>Imprimir
	</a></center>
<br><br><br><hr><br>
</div></center>

<footer class="footer">
<center><h3>&copy; Todos los derechos reservados</h3></center>
</footer>
<script src="Menu.js"></script>
</body>
</html>

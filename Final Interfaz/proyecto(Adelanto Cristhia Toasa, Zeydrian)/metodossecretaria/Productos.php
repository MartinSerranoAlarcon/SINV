<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,
maximum-scale=1.0, minimun-scale=1.0">
<link rel="stylesheet" href="estilos.css">
<link rel="stylesheet" href="fonts/style.css">
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

<form method="POST" action="metodossecretaria/consultaproductos.php">
<table>
	<td><h2>Ingresar el nombre del producto: <input type="search" id="direccioncliente" size="20px" name="producto"></h2></td>
	<td><center><!--<a href="#" class="botonguardar">
		<span class="icon-eye"></span>Buscar
	</a>-->
    <input type="submit" value="Buscar" class="botonguardar" ></center></td>
	</table>
 
	<br><br>
	<center><table class="tb1">
		<tr>
			<td><b>Producto</b></td>
			<td><b>Descripcion</b></td>
			<td><b>Cantidad</b></td>
			<td><b>Precio</b></td>
		</tr>
			<?php include('metodossecretaria/consultaproductos.php')?>
	</table></center>
<center><a href="#" class="botonimprimir">
		<span class="icon-print"></span>Imprimir
	</a></center>
<br><br><br><hr><br>
</div></center>
   </form>		
<footer class="footer">
<center><h3>&copy; Todos los derechos reservados</h3></center>
</footer>
<script src="Menu.js"></script>

</body>
</html>
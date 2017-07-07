<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,
maximum-scale=1.0, minimun-scale=1.0">
<link rel="stylesheet" href="estilos.css">
<link rel="stylesheet" href="fonts/style.css">
<style> 
            .footer {
	           background:#000000;
	           color:#fff;
	           padding:10px;
	           text-align:center;
	           width:100%;
	           height:100px;
                position: absolute;
                bottom: 0;
            }
        }
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
<center>
<div class="Factura">
<br><hr><br>
<center><h1 class="Titulo">Busqueda de Productos</h1></center>
<table>
	<td><h2>Ingresar el nombre del producto: <input type="text"  name="nombreproducto"  id="nombreproducto" size="20px"></h2></td>
	<td><center><button type="submit" class="botonguardar" value="Consultar" name="btnconsultar"><span class="icon-eye"></span>
    </center>
    </td>
</table>
<table class="tb1">
		<th>
			<td><b>Producto</b></td>
			<td><b>Descripcion</b></td>
			<td><b>Cantidad</b></td>
			<td><b>Precio</b></td>
		</th>
		
	</table>
  <?php
	include(CosultarProductos.php);
	?>
        

	<br><br>
<center><a href="#" class="botonimprimir">
		<span class="icon-print"></span>Imprimir
	</a></center>
<br><br><br><hr><br>
</div></center>
		
<footer class="footer">
<center><h3>&copy; Todos los derechos reservados</h3></center>
</footer>
<script src="Menu.js"></script>

</html>
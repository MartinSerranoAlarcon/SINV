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
    </style>
</head>
<body background='Imagenes/background-1478187121.png'>
	<script type="text/javascript" src="factura.js"></script>
<header class="header">
	<div class="contenedor">
		<img src="Imagenes/Logo.png"  width=220 height=70>
		<h1 class="Titulo">Alquiler de Vajillas "Hilda Maria"</h1>
		<a href="#" class="botonregresar" value="Regresar" onclick="" >
		<span class="icon-arrow-bold-left"></span>Regresar
	</a>
	</div>
</header>

<script type="text/javascript" src="factura.js"></script>

<center>
<div class="Cuentas">
    
<div class="Cuentas_Co">

<center> <h1>Transportes en Ruta</h1></center>
<table class="tb1">
		<thead>
			<td><b>Placa</b></td>
            <td><b>Estado</b></td>
			</thead>
		               
	</table>
  <?php include(ConsultarTransporte.php) ?>

</div>

</div>
		
<footer class="footer">
<center><h3>&copy; Todos los derechos reservados</h3></center>
</footer>
<script src="Menu.js"></script>
</body>
</html>
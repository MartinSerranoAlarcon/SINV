<?
include('Ingreso.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,
maximum-scale=1.0, minimun-scale=1.0">
<link rel="stylesheet" href="estilos.css">
<link rel="stylesheet" href="fonts/style.css">
    <style>
        @media(min-width:480px){
          .cent{
                border-right-style:none;
                width: 100%;
            }
            
        }
    @media(min-width:1024px){
        .izq{
            display:inline-block;
        }
    }

    @media(min-width:1280px){
        .izq{
                display: inline-block;
                width:500px;
                
            }
            
            .der{
                float:left;
                width:400px;
                
            }
            
            .cent{
                border-right-style:double;
                width: 500px;
            }
    }
</style>
</head>
<body background='Imagenes/background-1478187121.png'>
<header class="header">
	<div class="contenedor">
		<img src="Imagenes/Logo.png"  width=220 height=70>
		<h1 class="Titulo">Alquiler de Vajillas "Hilda Maria"</h1>
		<a href="Cerrar.php" class="botonregresar" value="Regresar" onclick="" >
		<span class="icon-arrow-bold-left"></span>Regresar
	</a>
	</div>
</header>

<div class="ContenidoPrin">
			<div class="izq">
            </div>
			<div class="cent">
				<center><h2>Bodega</h2></center>
				<center><a href="BProductos.html" class="botones">
				<span class="icon-layers"></span>Buscar Productos
				</a></center>
				<center><a href="Consultas.html" class="botones">
				<span class="icon-documents"></span>Ordenes de Trabajo
				</a></center>
				
			</div>
			<div class="der">
			</div>
</div>			
<footer class="footer">
<center><h3>&copy; Todos los derechos reservados</h3></center>
</footer>
<script src="Menu.js"></script>
</body>
</html>

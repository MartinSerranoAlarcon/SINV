<?php
session_start();
function autoriza(){
	  if(isset($_SESSION['usuario']) == true && $_SESSION['tipo'] == 1) {
		return true;
	} else {
		return false;
	}
}

if(autoriza() == false) {
	header('location: PHPAdmin/Cerrar.php');
}
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
            .izq{
                display: inline-block;
                width:100px;
                
            }
            
            .der{
                float:left;
                width:100px;
                
            }
            
            .cent{
                border-right-style:double;
                width: 280px;
            }
            
        
    }


    @media(min-width:768px){
        
    }

    @media(min-width:1024px){
        .izq{
            display:inline-block;
        }
    }

    @media(min-width:1280px){
        .izq{
                display: inline-block;
                width:400px;
                
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
		<a href="PHPAdmin/Cerrar.php" class="botonregresar" value="Regresar" onclick="" >
		<span class="icon-arrow-bold-left"></span>Salir
	</a>
	</div>
</header>
<br>
<div class="ContenidoPrin">
			<div class="izq">
				<center><h2>Cuentas Por Pagar</h2></center>
				<center><a href="Cuentas_Pagar.php" class="botones">
				<span ></span>Cuentas por Pagar
				</a></center>
				
			</div>
			<div class="cent">
				<center><h2>Administrador</h2></center>
				<center><a href="Productos.php" class="botones">
				<span class="icon-layers"></span>Productos
				</a></center>
				<center><a href="Usuarios.php" class="botones">
				<span class="icon-user"></span>Usuarios
				</a></center>
				<center><a href="Clientes.php" class="botones">
				<span class="icon-man"></span>Clientes
				</a></center>
				<center><a href="Transportes.php" class="botones">
				<span class="icon-box"></span>Transportes
				</a></center>
				<center><a href="Proveedores.php" class="botones">
				<span class="icon-users"></span>Proveedores
				</a></center>
			</div>
			<div class="der">
				<center><h2>Cuentas por Cobrar</h2></center>
				<center><a href="Cuentas_Cobra.php" class="botones">
				<span ></span>Cuentas por Cobrar
				</a></center>
				
			</div>
	</div>
	
					
<footer class="footer">
<center><h3>&copy; Todos los derechos reservados</h3></center>
</footer>
<script src="Menu.js"></script>
</body>
</html>

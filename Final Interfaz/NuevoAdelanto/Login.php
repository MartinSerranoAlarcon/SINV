<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,
maximum-scale=1.0, minimun-scale=1.0">
<link rel="stylesheet" href="estilos.css">
<link rel="stylesheet" href="fonts/style.css">
    <style>
        .header .contenedor{
	       display:flex;
	       justify-content:space-between;
        }
        
        @media(min-width:480px){
            .cent{
                border-right-style:none;
                width: 100%;
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
        
    }
    </style>
<script src="flogin.js"></script>
</head>
<body background='Imagenes/background-1478187121.png'>
<header class="header">
	<div class="contenedor">
		<img src="Imagenes/Logo.png"  width=220 height=70>
        <h1 class="Titulo">Alquiler de Vajillas "Hilda Maria"</h1>
        
	</div>
</header>
    
<div class="ContenidoPrin">
	<div class="izq">
	</div>
    <div class="cent">
	<br><br><br><br>
                            <center><h2>Validacion de credenciales</h2></center>
                        <form name="login" method="POST" action="PHPAdmin/Validar.php">
                        <center><label for="user">Usuario:</label><input type="text" name="nnombre" placeholder="Usuario" /></center>
            <br>
            <center><label for="passw">Clave          :        </label><input type="password" name="npassword" placeholder="Contraseña" /></center>
            <br>
		<center><input type="submit" value="Ingresar" class="botones"></center>
		</form>
     </div>
</div>	

<footer class="footer">
<center><h3>&copy; Todos los derechos reservados</h3></center>
</footer>
<script src="Menu.js"></script>
</body>
</html>

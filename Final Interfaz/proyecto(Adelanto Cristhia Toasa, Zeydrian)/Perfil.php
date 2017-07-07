<?php
session_start();
function autoriza(){
	if(isset($_SESSION['usuario'])==true) {
		return true;
	} else {
		return false;
	}
}
if(autoriza() == false) {
	header('location: Index.php');
}
?>
<!doctype html>
<html>
    <head>
    <title>Perfil de <?php echo $_SESSION['usuario']; ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/perfil.css"/>
    <link rel="stylesheet" type="text/css" href="css/pictureflip.css" />
    
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
    
    <script type="text/javascript" src="//use.typekit.net/vue1oix.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    
    <script src="js/modernizr.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.pictureflip.js"></script>
    <script type="text/javascript">
    	$(document).ready(function() {
			$('#flipbook').pageFlip({});
		});
    </script>
</head>

	<body>

		<div class="container">
			<div class="header"><a href="Index.html"><img src="imagenes/logo.png" alt="Insertar logotipo aquí" name="Insert_logo" width="100" height="100" id="Insert_logo" style="background-color: #C6D580; display:block;" /></a> 
            <!-- end .header -->
		</div>
		<div class="sidebar1">
			<ul class="nav">
				<li><a href="Inicio.php">Inicio</a></li>
				<li><a href="Perfil.php"><?php echo $_SESSION['usuario']; ?></a></li>
				<li><a href="#">Mensajes</a></li>
				<li><a href="#">Notificaciones</a></li>
				<li><a href="SubirImagen.php">Subir Imagen</a></li>
				<li><a href="Cerrar.php">Cerrar Sesion</a></li>
			</ul>
            <p>Si desea que la navegación se sitúe a lo largo de la parte superior, simplemente mueva ul.nav a la parte superior de la página y vuelva a crear el estilo.</p>
            <!-- end .sidebar1 -->
		</div>
		<div class="content">
            <h1>Album</h1>
            
			<div id="flipbook">
				<div class="slide">
                    <img src="imagenes/1.jpg" alt="" /> 
                </div>
                <div class="slide">
                    <img src="imagenes/2.jpg" alt="" /> 
                </div>
                <div class="slide">
                    <img src="imagenes/3.jpg" alt="" />
                </div>
            </div>
            <!-- end .content -->
		</div>
		<div class="footer">
            <p>Este .footer contiene la declaración position:relative; para dar a Internet Explorer 6 hasLayout para .footer y provocar que se borre correctamente. Si no es necesario proporcionar compatibilidad con IE6, puede quitarlo.</p>
            <!-- end .footer -->
		</div>
          <!-- end .container -->
		</div>
	</body>
</html>

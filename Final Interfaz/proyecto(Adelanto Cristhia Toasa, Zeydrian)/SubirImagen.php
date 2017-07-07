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
<title>Subir Imagenes de <?php echo $_SESSION['usuario']; ?></title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/subir.css"/>
<link rel="stylesheet" type="text/css" href="css/pictureflip.css" />

<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">

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
			<li><a href="Cerrar.php">Cerrar Sesion</a></li>
        </ul>
        <!-- end .sidebar1 -->
	</div>
	
    <div class="content">
            </div>
        <!-- end .content -->
    </div>
    
    <div class="footer">
        <p>PIE DE PAGINA</p>
        <!-- end .footer -->
    </div>
  <!-- end .container -->
</div>
</body>
</html>

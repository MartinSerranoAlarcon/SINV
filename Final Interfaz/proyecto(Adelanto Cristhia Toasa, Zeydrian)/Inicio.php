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
<title>S/N</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/main.css"/>
<!--<link rel="stylesheet" type="text/css" href="icons/ss-standard.css" />-->
<link rel="stylesheet" type="text/css" href="css/pictureflip.css" />

<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">

</head>

<body>

<div class="container">
<div class="encabezado">
  <div class="header"><a href="#"><img src="imagenes/logo.png" alt="Insertar logotipo aquí" name="Insert_logo" width="100" height="100" id="Insert_logo" style="background-color: #C6D580; display:block; " /></a> 
  </div>
    <!-- end .header -->
    </div>
  <div class="sidebar1">
    <ul class="nav">
      <li><a href="Inicio.php">Inicio</a></li>
      <li><a href="Perfil.php"><?php echo $_SESSION['usuario']; ?></a></li>
      <li><a href="#">Mensajes</a></li>
      <li><a href="#">Notificaciones</a></li>
      <li><a href="#">Subir Imagen</a></li>
      <li><a href="Cerrar.php">Cerrar Sesion</a></li>
    </ul>
    <p> Los vínculos anteriores muestran una estructura de navegación básica que emplea una lista no ordenada con estilo de CSS. Utilícela como punto de partida y modifique las propiedades para lograr el aspecto deseado. Si necesita menús desplegables, créelos empleando un menú de Spry, un widget de menú de Adobe Exchange u otras soluciones de javascript o CSS. aaaaaaaaaaaaaaa aaaaa.</p>
    <!-- end .sidebar1 --></div>
  <div class="content">
    <h1>Instrucciones</h1>
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
    <!--end .content--> 
    </div>
  <div class="sidebar2">
    <h4>Fondos</h4>
    <p>Por naturaleza, el color de fondo de cualquier div sólo se muestra a lo largo del contenido. Si desea usar una línea divisora en lugar de un color, coloque un borde en el lado de la div de .content (pero sólo en el caso de que siempre vaya a tener más contenido).</p>
    <p>Los vínculos anteriores muestran una estructura de navegación básica que emplea una lista no ordenada con estilo de CSS. Utilícela como punto de partida y modifique las propiedades para lograr el aspecto deseado. aaaaaa aaaaaaaaa</p>
    <!-- end .sidebar2 --></div>
  <div class="footer">
    <p>Este .footer contiene la declaración position:relative; para dar a Internet Explorer 6 hasLayout para .footer y provocar que se borre correctamente. Si no es necesario proporcionar compatibilidad con IE6, puede quitarlo.</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>

<?php
require(C:\xampp\htdocs\PagSocial\conn\Conexion.php);

$consulta = mysqli_query("SELECT usu FROM usuario WHERE usu LIKE '$usuario' and pass LIKE '$cont'", $enlace);
$dato = mysqli_fetch_array ($consulta);
$cambia=$dato["usu"];

if ($dato!="admin"){
Header("Location: http://localhost/PagSocial/Index.html");
}
else {
Header("Location: http://localhost/PagSocial/Perfil.html");
}
?>
<?php

function obtener_seccion()
{
	global $conexion;
	$sql="select * from prioridades";
	$secciones = mysqli_query($conexion, $sql);
	if($secciones != false)
	{
		return $secciones;
	}
}

?>
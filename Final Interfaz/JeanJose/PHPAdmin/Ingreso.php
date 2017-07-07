<?php
session_start();





function autoriza(){
	  if(isset($_SESSION['usuario']) == true && $_SESSION['tipo'] == 1) {
		return true;
	} if(isset($_SESSION['usuario']) == true && $_SESSION['tipo'] == 2) {
		return true;
	} if(isset($_SESSION['usuario']) == true && $_SESSION['tipo'] == 3) {
		return true;
	} if(isset($_SESSION['usuario']) == true && $_SESSION['tipo'] == 4) {
		return true;
	} if(isset($_SESSION['usuario']) == true && $_SESSION['tipo'] == 5) {
		return true;
	} else {
		return false;
	}
}

if(autoriza() == false) {
	header('location: Cerrar.php');
}
?>
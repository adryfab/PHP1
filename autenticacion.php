<?php
if ($_POST["usuario"]=="usuario" && $_POST["contrasena"]=="123"){
	session_start();
	$_SESSION["autenticado"]= "SI";
	header ("Location: menu.php");
}
else {
	header("Location: index.php?errorusuario=si");
}
?>
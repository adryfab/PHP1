<?php
//vemos si el usuario y contrase�a son v�lidos
if ($_POST["usuario"]=="usuario" && $_POST["contrasena"]=="123"){
//usuario y contrase�a v�lidos
//se define una sesion y se guarda el dato session_start();
$_SESSION["autenticado"]= "SI";
header ("Location: principal.php");
}else {
//si no existe se va al inicio
header("Location: index.html?errorusuario=si");
}
?>
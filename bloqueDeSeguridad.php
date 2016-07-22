<?php
//Inicio la sesión
session_start();
//COMPRUEBA QUE EL USUARIO ESTA AUTENTICADO
if ($_SESSION["autenticado"] != "SI") {
//si no existe, va a la página de autenticacion
header("Location: index.html");
//salimos de este script
exit();
}
?>
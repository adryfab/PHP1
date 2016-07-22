<?php
session_start();
if ($_SESSION["autenticado"] != "SI") {
	header("Location: index.php?error=si");
	exit();
}
?>
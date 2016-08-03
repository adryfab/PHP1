<HTML>
<HEAD>
 <TITLE>Insercion manual</TITLE>
</HEAD>
<BODY>
<?php
	require 'conexion.php';
  $datos="DELETE FROM imagenes";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al eliminar los datos de la tabla imagenes<br>';
  }else{
	echo 'Los datos se eliminaron correctamente de la tabla imagenes<br>';
  }	
  $datos="DELETE FROM promo_desc";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al eliminar los datos de la tabla promo_desc<br>';
  }else{
	echo 'Los datos se eliminaron correctamente de la tabla promo_desc<br>';
  }	
  //---------------------------------------------------------------------
  $datos="DELETE FROM tipo";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al eliminar los datos de la tabla tipo<br>';
  }else{
	echo 'Los datos se eliminaron correctamente de la tabla tipo<br>';
  }	
  $datos="INSERT INTO tipo (descripcion,estado) VALUES('PROMOCION','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla tipo<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla tipo<br>';
  }	
  $datos="INSERT INTO tipo (descripcion, estado) VALUES('DESCUENTO','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla tipo<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla tipo<br>';
  }
  //--------------------------------------------------//
  $datos="DELETE FROM categoria";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al eliminar los datos de la tabla categoria<br>';
  }else{
	echo 'Los datos se eliminaron correctamente de la tabla categoria<br>';
  }
  $datos="INSERT INTO categoria (descripcion, estado) VALUES('INSTRUMENTOS MUSICALES','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla categoria<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla categoria<br>';
  }
  $datos="INSERT INTO categoria (descripcion, estado) VALUES('AUDIO PRO','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla categoria<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla categoria<br>';
  }
  $datos="INSERT INTO categoria (descripcion, estado) VALUES('ESTUDIO DE GRABACION','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla categoria<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla categoria<br>';
  }
  $datos="INSERT INTO categoria (descripcion, estado) VALUES('ILUMINACION/VIDEO','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla categoria<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla categoria<br>';
  }
  $datos="INSERT INTO categoria (descripcion, estado) VALUES('ACCESORIOS','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla categoria<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla categoria<br>';
  }
  //-------------------------------------------------//
  $datos="DELETE FROM marca";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla marca<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla marca<br>';
  }
  $datos="INSERT INTO marca (descripcion, estado) VALUES('PIONEER DJ','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla marca<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla marca<br>';
  }
  $datos="INSERT INTO marca (descripcion, estado) VALUES('SCHECTER','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla marca<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla marca<br>';
  }
  $datos="INSERT INTO marca (descripcion, estado) VALUES('YAMAHA','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla marca<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla marca<br>';
  }
  $datos="INSERT INTO marca (descripcion, estado) VALUES('WASHBURN','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla marca<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla marca<br>';
  }
  $datos="INSERT INTO marca (descripcion, estado) VALUES('BENQ','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla marca<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla marca<br>';
  }
  $datos="INSERT INTO marca (descripcion, estado) VALUES('SHURE','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla marca<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla marca<br>';
  }
  $datos="INSERT INTO marca (descripcion, estado) VALUES('IBANEZ','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla marca<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla marca<br>';
  }
  $datos="INSERT INTO marca (descripcion, estado) VALUES('TYCOON','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla marca<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla marca<br>';
  }
  $datos="INSERT INTO marca (descripcion, estado) VALUES('KIRLIN','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla marca<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla marca<br>';
  }
  $datos="INSERT INTO marca (descripcion, estado) VALUES('MARTIN','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla marca<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla marca<br>';
  }
  $datos="INSERT INTO marca (descripcion, estado) VALUES('SHARP','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla marca<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla marca<br>';
  }
  $datos="INSERT INTO marca (descripcion, estado) VALUES('EURO DJ','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla marca<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla marca<br>';
  }
  $datos="INSERT INTO marca (descripcion, estado) VALUES('BETA THREE','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla marca<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla marca<br>';
  }
  $datos="INSERT INTO marca (descripcion, estado) VALUES('SONAR','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla marca<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla marca<br>';
  }
  $datos="INSERT INTO marca (descripcion, estado) VALUES('LA BELLA','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla marca<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla marca<br>';
  }
  $datos="INSERT INTO marca (descripcion, estado) VALUES('DADDARIO','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla marca<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla marca<br>';
  }
  $datos="INSERT INTO marca (descripcion, estado) VALUES('OPTOMA','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla marca<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla marca<br>';
  }
  $datos="INSERT INTO marca (descripcion, estado) VALUES('CRUSADER','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla marca<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla marca<br>';
  }
  $datos="INSERT INTO marca (descripcion, estado) VALUES('BEHRINGER','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla marca<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla marca<br>';
  }
  $datos="INSERT INTO marca (descripcion, estado) VALUES('ITALY AUDIO','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla marca<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla marca<br>';
  }
  $datos="INSERT INTO marca (descripcion, estado) VALUES('REMO','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla marca<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla marca<br>';
  }
  $datos="INSERT INTO marca (descripcion, estado) VALUES('DUNLOP','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla marca<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla marca<br>';
  }
  $datos="INSERT INTO marca (descripcion, estado) VALUES('DINON','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla marca<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla marca<br>';
  }
  $datos="INSERT INTO marca (descripcion, estado) VALUES('KRK','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla marca<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla marca<br>';
  }
  $datos="INSERT INTO marca (descripcion, estado) VALUES('DENON','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla marca<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla marca<br>';
  }
  $datos="INSERT INTO marca (descripcion, estado) VALUES('EVANS','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla marca<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla marca<br>';
  }
  $datos="INSERT INTO marca (descripcion, estado) VALUES('AUDIO CENTER','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla marca<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla marca<br>';
  }
  $datos="INSERT INTO marca (descripcion, estado) VALUES('ESPAÑOLA','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla marca<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla marca<br>';
  }
  $datos="INSERT INTO marca (descripcion, estado) VALUES('PEAVEY','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla marca<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla marca<br>';
  }
  $datos="INSERT INTO marca (descripcion, estado) VALUES('ALICE','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla marca<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla marca<br>';
  }
  $datos="INSERT INTO marca (descripcion, estado) VALUES('MAXTON','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla marca<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla marca<br>';
  }
  $datos="INSERT INTO marca (descripcion, estado) VALUES('OYILITY','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla marca<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla marca<br>';
  }
  $datos="INSERT INTO marca (descripcion, estado) VALUES('HARTKE','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla marca<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla marca<br>';
  }
  //-------------------------------------------------//  
  $datos="DELETE FROM producto";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al eliminar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se eliminaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('BATERIAS','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('TECLADOS','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('PERCUSION','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('AMPLIFICADORES','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('ARMONICA','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('PIANOS','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('BAJOS','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('PLATILLOS','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('MELODICA','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('GUITARRAS','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('PALILLOS','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('MIDI','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('CABEZALES','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('PEDALERAS','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('CABINAS','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('PARLANTES','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('COMPRESORES','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('MICROFONOS','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('CONSOLAS','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('LINE ARRAY','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('CONTROLADORES','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('POTENCIAS','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('SISTEMA DE PREAMPLIFICACION','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('CROSSOVER','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('CAR AUDIO','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('ECUALIZADORES','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('SONIDO AMBIENTAL','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('AUDIFONOS','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('FEEDBACK DESTROYER','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('RACK','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('COMPACTERAS','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('MEZCLADORES','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('PRE-AMPLIFICADOR','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('CONTROLADOR MIDI','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('MONITORES','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('KITS','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('INTERFACES DE SONIDO','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('LED','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('LASER','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('CONSOLA DE LUCES','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('PROYECTOR','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('PANTALLA PARA PROYECTOR','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('MAQUINA DE EFECTOS','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('INSTRUMENTOS','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('ADAPTADORES','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('CABLES','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('CORREAS','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('KIT DE LIMPIEZA','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('CONECTORES','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('FORROS','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('CAMISETAS','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('PARCHES','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('PEDESTALES','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('PENDRIVER','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('TORNILLOS','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('PEDALBOARD','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('CUERDAS','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  $datos="INSERT INTO producto (descripcion, estado) VALUES('VITELA','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos de la tabla producto<br>';
  }else{
	echo 'Los datos se insertaron correctamente de la tabla producto<br>';
  }
  //-------------------------------------------------//
?>
</BODY>
</HTML>

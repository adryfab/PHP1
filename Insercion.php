<HTML>
<HEAD>
 <TITLE>Insercion manual</TITLE>
</HEAD>
<BODY>
<?php  
  require 'conexion.php';
 
  $datos="INSERT INTO `tipo` (`descripcion`,`estado`) VALUES('Promocion','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos <br>';
  }else{
	echo 'Los datos se insertaron correctamente <br>';
  }
	
  $datos="INSERT INTO `tipo` (`descripcion`,`estado`) VALUES('Descuento','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos <br>';
  }else{
	echo 'Los datos se insertaron correctamente <br>';
  }
  
  $datos="INSERT INTO `categoria` (`descripcion`,`estado`) VALUES('Audio Pro','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos <br>';
  }else{
	echo 'Los datos se insertaron correctamente <br>';
  }
  
  $datos="INSERT INTO `marca` (`descripcion`,`estado`) VALUES('PIONEER DJ','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos <br>';
  }else{
	echo 'Los datos se insertaron correctamente <br>';
  }
  
  $datos="INSERT INTO `producto` (`descripcion`,`estado`) VALUES('Controladores','A')";
  $consulta=mysql_query($datos);
  if(!$consulta){
	echo 'Error al insertar los datos <br>';
  }else{
	echo 'Los datos se insertaron correctamente <br>';
  }

?>
</BODY>
</HTML>
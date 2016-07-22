<HTML>
  <HEAD>
	<TITLE>Creación de Tablas</TITLE>
  </HEAD>
  <BODY>
	<?php
	  //Conexion
	  $host='localhost';
	  $user='root';
	  $pass=''; 
	  $conexion=mysql_connect($host,$user,$pass);

	  //Creacion de Base de Datos
	  $sql="CREATE database PromoDes";
	  $insertar=mysql_query($sql,$conexion);
      if(!$insertar){
		echo 'Error al crear la base de datos<br />';
	  }else{
		echo 'Base de datos creada exitosamente<br />';
	  }

	  $conexion=mysql_connect($host,$user,$pass);
 
	  mysql_select_db('PromoDes',$conexion);
	  
	  //Creacion de Tabla de Tipo
	  $tabla="CREATE TABLE IF NOT EXISTS `tipo` (
		`cod_tipo` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `descripcion` varchar(50) NOT NULL,
		`estado` char(1) NOT NULL
        )";

	  $crear_tabla=mysql_query($tabla,$conexion);
	  if(!$crear_tabla){
		echo 'Error al crear la table tipo en la base de datos <br>';
	  }else{
		echo 'La tabla tipo se creo correctamente <br>';
	  }

	  //Creacion de Tabla de Categoria
	  $tabla="CREATE TABLE IF NOT EXISTS `categoria` (
		`cod_categoria` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `descripcion` varchar(50) NOT NULL,
		`estado` char(1) NOT NULL
        )";

	  $crear_tabla=mysql_query($tabla,$conexion);
	  if(!$crear_tabla){
		echo 'Error al crear la table categoria en la base de datos <br>';
	  }else{
		echo 'La tabla categoria se creo correctamente <br>';
	  }
	  
	  //Creacion de Tabla de Marca
	  $tabla="CREATE TABLE IF NOT EXISTS `marca` (
		`cod_marca` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `descripcion` varchar(50) NOT NULL,
		`estado` char(1) NOT NULL
        )";

	  $crear_tabla=mysql_query($tabla,$conexion);
	  if(!$crear_tabla){
		echo 'Error al crear la table marca en la base de datos <br>';
	  }else{
		echo 'La tabla marca se creo correctamente <br>';
	  }
	  
	  //Creacion de Tabla de Producto
	  $tabla="CREATE TABLE IF NOT EXISTS `producto` (
		`cod_producto` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `descripcion` varchar(50) NOT NULL,
		`estado` char(1) NOT NULL
        )";

	  $crear_tabla=mysql_query($tabla,$conexion);
	  if(!$crear_tabla){
		echo 'Error al crear la table producto en la base de datos <br>';
	  }else{
		echo 'La tabla producto se creo correctamente <br>';
	  }
	  
	  
	  //Creacion de Tabla de Promociones y Descuentos
	  $tabla="CREATE TABLE `promo_desc` (
		`cod_promo_desc` int(11) AUTO_INCREMENT PRIMARY KEY,
		`cod_tipo` int(11),
		`cod_categoria` int(11),
		`cod_marca` int(11),
		`cod_producto` int(11),
		`titulo` varchar(10),
		`precio` DECIMAL(7,2),
		`porcentaje` int(11),
		`descripcion` varchar(50),
		`fec_desde` date,
		`fec_hasta` date,
		`estado` char(1) NOT NULL,
		FOREIGN KEY (cod_tipo) REFERENCES tipo(cod_tipo),
		FOREIGN KEY (cod_categoria) REFERENCES categoria(cod_categoria),
		FOREIGN KEY (cod_marca) REFERENCES marca(cod_marca),
		FOREIGN KEY (cod_producto) REFERENCES producto(cod_producto)
	  )";

	  $crear_tabla=mysql_query($tabla,$conexion);
	  if(!$crear_tabla){
		echo 'Error al crear la table maestra en la base de datos <br>';
	  }else{
		echo 'La tabla maestra se creo correctamente <br>';
	  }
	  
	  
	  //Creacion de Tabla de Imagen
	  $tabla="CREATE TABLE `imagenes` (
		`cod_imagen` int(11) AUTO_INCREMENT PRIMARY KEY,
		`cod_promo_desc` int(11),
		`imagen` mediumblob,
		`tipo_imagen` varchar(30),
		`estado` char(1) NOT NULL,
		FOREIGN KEY (cod_promo_desc) REFERENCES promo_desc(cod_promo_desc)
	  )";

	  $crear_tabla=mysql_query($tabla,$conexion);
	  if(!$crear_tabla){
		echo 'Error al crear la table imagen en la base de datos <br>';
	  }else{
		echo 'La tabla imagen se creo correctamente <br>';
	  }
 
	?>
  </BODY>
</HTML>
<HTML>
  <HEAD>
	<TITLE>Ingreso</TITLE>
  </HEAD>
  <BODY>
	HOLA <br>
	<?php
	  $codigo = $_POST['codigo'];
	  $tipo = $_POST['tipo'];
	  $categoria = $_POST['categoria'];
	  $marca = $_POST['marca'];
	  $producto = $_POST['producto'];
	  $titulo = $_POST['titulo'];
	  $precio = $_POST['precio'];
	  $descuento = $_POST['descuento'];
	  $descripcion = $_POST['descripcion'];
	  $fecdes = $_POST['fecdes'];
	  $fechas = $_POST['fechas'];
	  $ingresar = $_POST['ingresar'];
	  
	  echo $ingresar."<br>";
	  
	  require 'conexion.php';
	  
	  if ($ingresar=="Ingresar")
	  {
		$datos="INSERT INTO `promo_desc` (`cod_tipo`, `cod_categoria`, `cod_marca`, `cod_producto`, `titulo`,"; 
		$datos=$datos." `precio`, `porcentaje`, `descripcion`, `fec_desde`, `fec_hasta`, `estado`) VALUES(";
		$datos=$datos.$tipo.",";
		$datos=$datos."'".$categoria."',";
		$datos=$datos."'".$marca."',";
		$datos=$datos."'".$producto."',";
		$datos=$datos."'".$titulo."',";
		$datos=$datos."'".$precio."',";
		$datos=$datos."'".$descuento."',";
		$datos=$datos."'".$descripcion."',";
		$datos=$datos."'".$fecdes."',";
		$datos=$datos."'".$fechas."',";
		$datos=$datos."'A')";

		$consulta=mysql_query($datos);
		if(!$consulta){
		  echo 'Error al insertar los datos <br>';
		}else{
		  echo 'Los datos se insertaron correctamente <br>';
	    
		  $consulta2 = mysql_query("SELECT max(cod_promo_desc) as maximo FROM promo_desc WHERE estado = 'A'")
		  or die ("Fallo la consulta"); 
		  $fila = mysql_fetch_array($consulta2);
		  $codigo = $fila["maximo"];
		
		  if ( ! isset($_FILES["imagen"]) || $_FILES["imagen"]["error"] > 0){
			echo "No hay imagen para subir";
		  } else {
			//ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
			//y que el tamano del archivo no exceda los 16mb
			$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
			$limite_kb = 16384; //16mb es el limite de medium blob
     
			if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
			  //este es el archivo temporal
			  $imagen_temporal  = $_FILES['imagen']['tmp_name'];  
			  //este es el tipo de archivo
			  $tipo = $_FILES['imagen']['type'];
			  //leer el archivo temporal en binario
			  $fp     = fopen($imagen_temporal, 'r+b');
			  $data = fread($fp, filesize($imagen_temporal));
			  fclose($fp);
			  //escapar los caracteres
			  $data = mysql_escape_string($data);

			  $resultado = mysql_query("INSERT INTO imagenes (cod_promo_desc, imagen, tipo_imagen, estado) VALUES ('$codigo', '$data', '$tipo', 'A')");
			  if ($resultado){
				echo "el archivo ha sido copiado exitosamente";
			  } else {
				echo "ocurrio un error al copiar el archivo.";
			  }
			} else {
			  echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
			}
		  }
		}
	  }
	?>
    </BODY>
</HTML>
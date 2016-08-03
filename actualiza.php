<?php include ("bloqueDeSeguridad.php"); ?>
<HTML>
  <HEAD>
	<TITLE>Actualiza</TITLE>
	<!-- <link rel="stylesheet" href="estilo.css"> -->
	<link rel="stylesheet" href="w3.css">
  </HEAD>
  <BODY>
	<header class="w3-container w3-red">
	<img src="logo.png" class="w3-round-small">
	</header>
	<FORM name=form action="menu.php" method="post">
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
		$modificar = $_POST['modificar'];
	  
		require 'conexion.php';
	  
		if ($modificar=="Modificar")
		{
			$datos="UPDATE promo_desc "; 
      $datos=$datos."SET cod_tipo = ";
			$datos=$datos.$tipo.", ";
      $datos=$datos."cod_categoria = ";      
			$datos=$datos."'".$categoria."', ";
      $datos=$datos."cod_marca = ";
			$datos=$datos."'".$marca."', ";
      $datos=$datos."cod_producto = ";
			$datos=$datos."'".$producto."', ";
      $datos=$datos."titulo = ";
			$datos=$datos."'".$titulo."', ";
      $datos=$datos."precio = ";
			$datos=$datos."'".$precio."', ";
      $datos=$datos."porcentaje = ";
			$datos=$datos."'".$descuento."', ";
      $datos=$datos."descripcion = ";
			$datos=$datos."'".$descripcion."', ";
      $datos=$datos."fec_desde = ";
			$datos=$datos."'".$fecdes."', ";
      $datos=$datos."fec_hasta = ";
			$datos=$datos."'".$fechas."' ";
      $datos=$datos."WHERE cod_promo_desc = ";
      $datos=$datos.$codigo;
      
      //echo $datos;
      
			$consulta=mysql_query($datos);
			if(!$consulta){
				echo 'Error al actualizar los datos <br>';
			}else{
				echo 'Los datos se actualizaron correctamente <br>';
	            
        //Se verifica si hay una imagen insertada anteriormente
        //Si existe una imagen se actualiza, si no existe se inserta
        $datos="SELECT cod_imagen FROM imagenes WHERE cod_promo_desc = ";
        $datos=$datos.$codigo;
        
        //echo $datos;
        
        $consulta2 = mysql_query($datos)
          or die ("Fallo la consulta"); 
        $fila = mysql_fetch_array($consulta2);
        $codimg = $fila["cod_imagen"];
        
				if ( ! isset($_FILES["imagen"]) || $_FILES["imagen"]["error"] > 0){
					echo "No hay imagen para actualizar";
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
            
            //echo "codimg=".$codimg;
            $name = $_FILES["imagen"]["name"];
            $lugar = "imagen/".$name;
            
            if ($codimg=="")
            {
              $datos="INSERT INTO imagenes (cod_promo_desc, imagen, tipo_imagen, nombre, estado) VALUES (";
              $datos=$datos.$codigo.", '";
              $datos=$datos.$data."', '";
              $datos=$datos.$tipo."', '";
              $datos=$datos.$name."', ";
              $datos=$datos."'A')";
            } else {
              $datos="UPDATE imagenes SET "; 
              $datos=$datos."imagen = '";
              $datos=$datos.$data."', ";
              $datos=$datos."tipo_imagen = '";
              $datos=$datos.$tipo."', ";
              $datos=$datos."nombre = '";
              $datos=$datos.$name."' ";
              $datos=$datos."WHERE cod_promo_desc = ";
              $datos=$datos.$codigo;              
            }

            //echo $datos;
            
            if(move_uploaded_file($imagen_temporal,$lugar)){
              $resultado = mysql_query($datos);
              if ($resultado){
                echo "el archivo ha sido actualizado exitosamente";
              } else {
                echo "ocurrio un error al actualizar el archivo.";
              }
            } else {
              echo "Error al mover archivo a ruta";
            }
					} else {
						echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
					}
				}
			}
		}
	?>
    <br>
	<td><input type="submit" name="regresar" value="Regresar" 
    class="w3-btn w3-round-xxlarge w3-red w3-text-shadow"/></td>
	</FORM>
	</BODY>	
</HTML>
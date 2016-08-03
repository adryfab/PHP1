<?php include ("bloqueDeSeguridad.php"); ?>
<HTML>
	<HEAD>
		<TITLE>Eliminacion</TITLE>
	<!-- <link rel="stylesheet" href="estilo.css"> -->
	<link rel="stylesheet" href="w3.css">
	</HEAD>
	<BODY>
	<header class="w3-container w3-red">
	<img src="logo.png" class="w3-round-small">
	</header>
		<FORM name=form action="menu.php" method="post">
			<?php
				$codigo = $_GET['cod_promo_desc'];
				
				if ($codigo!=""){
					require 'conexion.php';
            
            //Se verifica si hay una imagen insertada anteriormente
            $datos="SELECT cod_imagen, nombre FROM imagenes WHERE cod_promo_desc = ";
            $datos=$datos.$codigo;
            $consulta2 = mysql_query($datos)
              or die ("Fallo la consulta"); 
            $fila = mysql_fetch_array($consulta2);
            $codimg = $fila["cod_imagen"];
            $nomimg = $fila["nombre"];
            if ( empty($codimg) ){
              echo "No hay imagen para borrar <br>";
            } else {
              $datos="DELETE FROM imagenes WHERE cod_promo_desc = ";
              $datos=$datos."'".$codigo."'";              
              $consulta=mysql_query($datos);
              if(!$consulta){
                echo 'Error al eliminar la imagen <br>';
              } else {
                unlink('imagen/'.$nomimg);
                echo 'La imagen se elimino correctamente <br>';                
              }
            }
            
            $datos="DELETE FROM promo_desc WHERE cod_promo_desc = ";
            $datos=$datos."'".$codigo."'";
            $consulta=mysql_query($datos);
            if(!$consulta){
              echo 'Error al eliminar los datos <br>';
            } else{
              echo 'Los datos se eliminaron correctamente <br>';
            }
        }
			?>
			<br>
			<td><input type="submit" name="regresar" value="Regresar" 
        class="w3-btn w3-round-xxlarge w3-red w3-text-shadow"/></td>
		</FORM>
	</BODY>
</HTML>

<?php include ("bloqueDeSeguridad.php"); ?>
<HTML>
	<HEAD>
		<TITLE>Eliminacion</TITLE>
	</HEAD>
	<BODY>
		<FORM name=form action="buscar.php" method="post">
			<?php
				$codigo = $_GET['cod_promo_desc'];
				
				if ($codigo!=""){
					require 'conexion.php';
					$datos="UPDATE promo_desc SET estado = 'E' WHERE cod_promo_desc = ";
					$datos=$datos."'".$codigo."'";
					
					$consulta=mysql_query($datos);
					if(!$consulta){
						echo 'Error al eliminar los datos <br>';
					}else{
						echo 'Los datos se eliminaron correctamente <br>';
					}
				}
			?>
			<br>
			<td><input type="submit" name="regresar" value="Regresar" /></td>
		</FORM>
	</BODY>
</HTML>

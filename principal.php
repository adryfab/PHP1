<HTML>
  <HEAD>
	<TITLE>Ingreso</TITLE>
  </HEAD>
  <BODY>
	<H2>PROMOCIONES Y DESCUENTOS</H2>
		
	<FORM name=form action="ingreso.php" method="post" enctype="multipart/form-data">
	<table border='3'; style="background-color:yellow; color:blue; font-size:23px">
	  <tr>
		<td>Código: </td>
		<td><INPUT type=number name=codigo SIZE=10 min="1" disable=”disabled”></td>
	  </tr>
	</table>
	<br><br>
    <table border='0'; style="background-color:33F4FF; color:blue; font-size:23px">
	  <tr>
		<td>Tipo: </td>
		<td>
		<?php
		  $host='localhost';
		  $user='root';
		  $pass='';
		  $conexion=mysql_connect($host,$user,$pass);
		  mysql_select_db('PromoDes',$conexion);
		
		  $consulta2 = mysql_query("Select * from tipo where estado = 'A'",$conexion)
			or die ("Fallo la consulta");
		  $nfila = mysql_num_rows ($consulta2);
		  echo "<select name='tipo'>";
		  for ($i=0; $i<$nfila; $i++)
		  {
			$fila = mysql_fetch_array($consulta2);
			echo "<option value='".$fila["cod_tipo"]."'>".$fila["descripcion"]."</option>";
		  }
		  echo "</select>";
		?>
		</td>
	  </tr>
	  <tr>
		<td>Categoría: </td>
		<td>
		<?php
		  $host='localhost';
		  $user='root';
		  $pass='';
		  $conexion=mysql_connect($host,$user,$pass);
		  mysql_select_db('PromoDes',$conexion);
		
		  $consulta2 = mysql_query("Select * from categoria where estado = 'A'",$conexion)
			or die ("Fallo la consulta");
		  $nfila = mysql_num_rows ($consulta2);
		  echo "<select name='categoria'>";
		  for ($i=0; $i<$nfila; $i++)
		  {
			$fila = mysql_fetch_array($consulta2);
			echo "<option value='".$fila["cod_categoria"]."'>".$fila["descripcion"]."</option>";
		  }
		  echo "</select>";
		?>
		</td>
	  </tr>	  
	  <tr>
		<td>Marca: </td>
		<td>
		<?php
		  $host='localhost';
		  $user='root';
		  $pass='';
		  $conexion=mysql_connect($host,$user,$pass);
		  mysql_select_db('PromoDes',$conexion);
		
		  $consulta2 = mysql_query("Select * from marca where estado = 'A'",$conexion)
			or die ("Fallo la consulta");
		  $nfila = mysql_num_rows ($consulta2);
		  echo "<select name='marca'>";
		  for ($i=0; $i<$nfila; $i++)
		  {
			$fila = mysql_fetch_array($consulta2);
			echo "<option value='".$fila["cod_marca"]."'>".$fila["descripcion"]."</option>";
		  }
		  echo "</select>";
		?>
		</td>
	  </tr>
	  <tr>
		<td>Producto: </td>
		<td>
		<?php
		  $host='localhost';
		  $user='root';
		  $pass='';
		  $conexion=mysql_connect($host,$user,$pass);
		  mysql_select_db('PromoDes',$conexion);
		
		  $consulta2 = mysql_query("Select * from producto where estado = 'A'",$conexion)
			or die ("Fallo la consulta");
		  $nfila = mysql_num_rows ($consulta2);
		  echo "<select name='producto'>";
		  for ($i=0; $i<$nfila; $i++)
		  {
			$fila = mysql_fetch_array($consulta2);
			echo "<option value='".$fila["cod_producto"]."'>".$fila["descripcion"]."</option>";
		  }
		  echo "</select>";
		?>
		</td>
	  </tr>
	  <tr>
		<td>Título: </td>
		<td><INPUT type=text name=titulo SIZE=10></td>
	  </tr>
	  <tr>
		<td>Precio: </td>
		<td><INPUT type=number name=precio SIZE=5 min="1" max="1000000" step="any"></td>
	  </tr>
	  <tr>
		<td>Descuento: </td>
		<td><INPUT type=number name=descuento SIZE=5 min="1" max="100"></td>
	  </tr>
	  <tr>
		<td>Descripción: </td>
		<td><textarea name="descripcion" cols="50" rows="4"></textarea></td>
	  </tr>
	  <tr>
		<td>Fecha Desde: </td>
		<td><input type="date" name="fecdes" value="<?php echo date("Y-m-d"); ?>"></td>
	  </tr>
	  <tr>
		<td>Fecha Hasta: </td>
		<td><input type="date" name="fechas" value="<?php echo date("Y-m-d"); ?>"></td>
	  </tr>
	  
	  
	  <tr>
		<td>Imagen</td>
		<td><input type="file" name="imagen" id="imagen" /></td>
	  </tr>
	  
	  <tr>
		<td><input type="submit" name="ingresar" value="Ingresar" /></td>
		<td><input type="reset" value="Limpiar" /></td>
	  </tr>
	</table>
    </FORM> 
	
  </BODY>
</HTML>
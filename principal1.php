<HTML>
  <HEAD>
	<TITLE>Ingreso</TITLE>
  </HEAD>
  <BODY>
	<H2>PROMOCIONES Y DESCUENTOS</H2>
	
	<script language=JavaScript>
	function validarSiNumero(numero, nombre){
    if (!/^([0-9])*$/.test(numero)){
      alert("El valor " + numero + " no es un número");
	  if (nombre=="codigo"){
	  document.form.codigo.value="";
	  document.form.codigo.focus();}
	  if (nombre=="precio"){
	  document.form.precio.value="";
	  document.form.precio.focus();}
	  if (nombre=="descuento"){
	  document.form.descuento.value="";
	  document.form.descuento.focus();}}
	}
	</script>

	
	<FORM name=form action="ingreso.php" method="post" enctype="multipart/form-data">
	<table border='3'; style="background-color:yellow; color:blue; font-size:23px">
	  <tr>
		<td>Código: </td>
		<td><INPUT type=number name=codigo SIZE=10 min="1"></td>
	  </tr>
	</table>
	<br><br>
    <table border='0'; style="background-color:33F4FF; color:blue; font-size:23px">
	  <tr>
		<td>Tipo: </td>
		<td>
		<?php
		  $host='mysql6.000webhost.com';
		  $user='a5048790_ProDes';
		  $pass='ProDes123';
		  $conexion=mysql_connect($host,$user,$pass);
		  mysql_select_db('a5048790_ProDes',$conexion);
		
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
		  $host='mysql6.000webhost.com';
		  $user='a5048790_ProDes';
		  $pass='ProDes123';
		  $conexion=mysql_connect($host,$user,$pass);
		  mysql_select_db('a5048790_ProDes',$conexion);
		
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
		  $host='mysql6.000webhost.com';
		  $user='a5048790_ProDes';
		  $pass='ProDes123';
		  $conexion=mysql_connect($host,$user,$pass);
		  mysql_select_db('a5048790_ProDes',$conexion);
		
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
		  $host='mysql6.000webhost.com';
		  $user='a5048790_ProDes';
		  $pass='ProDes123';
		  $conexion=mysql_connect($host,$user,$pass);
		  mysql_select_db('a5048790_ProDes',$conexion);
		
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
		<td><INPUT type=text name=precio SIZE=10 onChange="validarSiNumero(this.value, this.name);"></td>
		<input type="number" name="edad" min="18" max="99" step="5"  required="required">
	  </tr>
	  <tr>
		<td>Descuento: </td>
		<td><INPUT type=text name=descuento SIZE=10 onChange="validarSiNumero(this.value, this.name);"></td>
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
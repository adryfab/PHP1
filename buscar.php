<?php include ("bloqueDeSeguridad.php"); ?>
<HTML>
<HEAD>
	<TITLE>Buscar</TITLE>
</HEAD>
<BODY>
	<H2>BUSQUEDA DE PROMOCIONES Y DESCUENTOS</H2>
	<FORM name=form action="ingreso.php" method="post">
	<input type=hidden name="ingreso" value="NO">
	<?php
		require 'conexion.php';
		
	    echo "<h2>Listado de Promociones y Descuentos</h2>";
		echo "<table border='1'>\n";
		echo "<tr>\n";
    echo "<td>Tipo</td>\n";
    echo "<td>Categoria</td>\n";
    echo "<td>Marca</td>\n";
    echo "<td>Producto</td>\n";
		echo "<td>Titulo</td>\n";
		echo "<td>Precio</td>\n";
		echo "<td>Porcentaje</td>\n";
		echo "<td>Descripcion</td>\n";
		echo "<td>Desde</td>\n";
		echo "<td>Hasta</td>\n";
		echo "</tr>\n";

		$consulta = mysql_query("SELECT p.cod_promo_desc, p.titulo, p.precio, p.porcentaje, p.descripcion, p.fec_desde, p.fec_hasta, 
      t.descripcion as tipo, c.descripcion as categoria, m.descripcion as marca, r.descripcion as producto 
      FROM promo_desc p INNER JOIN tipo t on p.cod_tipo = t.cod_tipo INNER JOIN categoria c on p.cod_categoria = c.cod_categoria 
      INNER JOIN marca m on p.cod_marca = m.cod_marca INNER JOIN producto r on p.cod_producto = r.cod_producto 
      WHERE p.fec_hasta >= NOW() AND p.estado = 'A'")
			or die ("Fallo la consulta");
		$nfila = mysql_num_rows ($consulta);
		for ($i=0; $i<$nfila; $i++)
		{
			$fila = mysql_fetch_array($consulta);
			echo "<tr>\n";
      echo "<td>".$fila["tipo"]."</td>\n";
      echo "<td>".$fila["categoria"]."</td>\n";
      echo "<td>".$fila["marca"]."</td>\n";
      echo "<td>".$fila["producto"]."</td>\n";
			echo "<td>".$fila["titulo"]."</td>\n";
			echo "<td>".$fila["precio"]."</td>\n";
			echo "<td>".$fila["porcentaje"]."</td>\n";
			echo "<td>".$fila["descripcion"]."</td>\n";
			echo "<td>".$fila["fec_desde"]."</td>\n";
			echo "<td>".$fila["fec_hasta"]."</td>\n";
			echo "<td><a href='principal.php?cod_promo_desc=".$fila["cod_promo_desc"]."'>Modificar</a></td>\n";
			echo "<td><a href='elimina.php?cod_promo_desc=".$fila["cod_promo_desc"]."'>Eliminar</a></td>\n";
			echo "</tr>\n";
		}
		echo "</table>\n";
	?>
    <br>
	<td><button type="submit" formaction="menu.html">Regresar</button></td>
	</FORM>
	<script language="Javascript"> 
	function confirmar(codigo){ 
		confirmar=confirm("Esta seguro?"); 
		if (confirmar) {
			// si pulsamos en aceptar
			var pagina="elimina.php?cod_promo_desc="+codigo;
			document.form.variable_php.value=codigo;
			alert(codigo); 
			document.form.submit();
		}
		//else 
		// si pulsamos en cancelar
		//alert('Has dicho que no'); 
	} 
	</script>
</BODY>
</HTML>

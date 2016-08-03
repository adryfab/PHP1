<?php include ("bloqueDeSeguridad.php"); ?>
<HTML>
<HEAD>
	<TITLE>Buscar</TITLE>
	<!-- <link rel="stylesheet" href="estilo.css"> -->
	<link rel="stylesheet" href="w3.css">
</HEAD>
<BODY>
	<header class="w3-container w3-red">
	<img src="logo.png" class="w3-round-small">
	</header>
	<H2 class="w3-text-red">LISTA DE PROMOCIONES Y DESCUENTOS</H2>
	<FORM name=form action="ingreso.php" method="post">
	<input type=hidden name="ingreso" value="NO">
  
  <!-- <script src="js/jquery-1.9.1.min.js"></script> -->
  <!-- <input type="text" name="busqueda" id="busqueda" value="" placeholder="" maxlength="30" autocomplete="off" onKeyUp="buscar();"/> -->

  <div class="w3-responsive">
    <?php
      require 'conexion.php';
      
      echo "<table class='w3-table-all '>\n";
      echo "<tr class='w3-red'>\n";
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
      echo "<td></td>\n";
      echo "<td></td>\n";
      echo "</tr>\n";

      $consulta = mysql_query("SELECT p.cod_promo_desc, p.titulo, p.precio, p.porcentaje, p.descripcion, p.fec_desde, p.fec_hasta, 
        t.descripcion as tipo, c.descripcion as categoria, m.descripcion as marca, r.descripcion as producto 
        FROM promo_desc p INNER JOIN tipo t on p.cod_tipo = t.cod_tipo INNER JOIN categoria c on p.cod_categoria = c.cod_categoria 
        INNER JOIN marca m on p.cod_marca = m.cod_marca INNER JOIN producto r on p.cod_producto = r.cod_producto 
        WHERE p.fec_hasta >= CURDATE() AND p.estado = 'A' ORDER BY p.cod_promo_desc")
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
  </div>
  <br>
	<td><button type="submit" formaction="menu.php"
    class="w3-btn w3-round-xxlarge w3-red w3-text-shadow" w3-border'>Regresar</button></td>
	</FORM>
  
  <!-- <div id="resultadoBusqueda"></div> -->
  <script>
  $(document).ready(function() {
      $("#resultadoBusqueda").html('<p>JQUERY VACIO</p>');
  });

  function buscar() {
      var textoBusqueda = $("input#busqueda").val();
   
       if (textoBusqueda != "") {
          $.post("buscar.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
              $("#resultadoBusqueda").html(mensaje);
           }); 
       } else { 
          $("#resultadoBusqueda").html('<p>JQUERY VACIO</p>');
          };
  };
  </script>

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

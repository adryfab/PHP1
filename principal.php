<?php include ("bloqueDeSeguridad.php"); ?>
<HTML>
  <HEAD>
	<TITLE>Ingreso</TITLE>
  </HEAD>
  <BODY>
	<H2>PROMOCIONES Y DESCUENTOS</H2>
	
	<FORM name=form action="ingreso.php" method="post" enctype="multipart/form-data">
	<?php
	if (isset($_POST['ingreso'])) {
		$ingresar =$_POST['ingreso'];
	} else {
		$ingresar ="NO";
		$codigo = $_GET['cod_promo_desc'];
	}
	?>
    <table border='0'; style="background-color:33F4FF; color:blue; font-size:23px">
    <?php
			require 'conexion.php';	  
		  $conexion=mysql_connect($host,$user,$pass);
      if ($ingresar=="NO"){
        echo "<td><INPUT type=hidden name=codigo value=".$codigo."></td>";
      }
    ?>
	  <tr>
		<td>Tipo: </td>
		<td>
		<?php		
		  $consulta2 = mysql_query("Select * from tipo where estado = 'A'")
			or die ("Fallo la consulta");
		  $nfila = mysql_num_rows ($consulta2);
		  if ($ingresar=="NO"){
        $datos="SELECT cod_tipo FROM promo_desc WHERE cod_promo_desc = ";
        $datos=$datos."".$codigo."";
        $consulta = mysql_query($datos)
          or die ("Fallo la consulta");
        $fila2 = mysql_fetch_array($consulta);
		  }
		  echo "<select name='tipo'>";
		  for ($i=0; $i<$nfila; $i++)
		  {
        $fila = mysql_fetch_array($consulta2);
        if ($fila["cod_tipo"] == $fila2["cod_tipo"]){
          echo "<option value='".$fila["cod_tipo"]."' selected>".$fila["descripcion"]."</option>";
        } else {
          echo "<option value='".$fila["cod_tipo"]."'>".$fila["descripcion"]."</option>";
        }
		  }
		  echo "</select>";
		?>
		</td>
	  </tr>
	  <tr>
		<td>Categoria: </td>
		<td>
		<?php		
		  $consulta2 = mysql_query("Select * from categoria where estado = 'A'")
        or die ("Fallo la consulta");
		  $nfila = mysql_num_rows ($consulta2);
		  if ($ingresar=="NO"){
        $datos="SELECT cod_categoria FROM promo_desc WHERE cod_promo_desc = ";
        $datos=$datos."".$codigo."";
        $consulta = mysql_query($datos)
          or die ("Fallo la consulta");
        $fila2 = mysql_fetch_array($consulta);
		  }
		  echo "<select name='categoria'>";
		  for ($i=0; $i<$nfila; $i++)
		  {
        $fila = mysql_fetch_array($consulta2);
        if ($fila["cod_categoria"] == $fila2["cod_categoria"]){
          echo "<option value='".$fila["cod_categoria"]."' selected>".$fila["descripcion"]."</option>";
        } else {
          echo "<option value='".$fila["cod_categoria"]."'>".$fila["descripcion"]."</option>";
        }
      }
      echo "</select>";
		?>
		</td>
	  </tr>	  
	  <tr>
		<td>Marca: </td>
		<td>
		<?php
		  $consulta2 = mysql_query("Select * from marca where estado = 'A'")
			or die ("Fallo la consulta");
		  $nfila = mysql_num_rows ($consulta2);
		  if ($ingresar=="NO"){
        $datos="SELECT cod_marca FROM promo_desc WHERE cod_promo_desc = ";
        $datos=$datos."".$codigo."";
        $consulta = mysql_query($datos)
          or die ("Fallo la consulta");
        $fila2 = mysql_fetch_array($consulta);
		  }
		  echo "<select name='marca'>";
		  for ($i=0; $i<$nfila; $i++)
		  {
        $fila = mysql_fetch_array($consulta2);
        if ($fila["cod_marca"] == $fila2["cod_marca"]){
          echo "<option value='".$fila["cod_marca"]."' selected>".$fila["descripcion"]."</option>";
        } else {
          echo "<option value='".$fila["cod_marca"]."'>".$fila["descripcion"]."</option>";
        }
		  }
		  echo "</select>";
		?>
		</td>
	  </tr>
	  <tr>
		<td>Producto: </td>
		<td>
		<?php
		  $consulta2 = mysql_query("Select * from producto where estado = 'A'")
			or die ("Fallo la consulta");
		  $nfila = mysql_num_rows ($consulta2);
		  if ($ingresar=="NO"){
        $datos="SELECT cod_producto FROM promo_desc WHERE cod_promo_desc = ";
        $datos=$datos."".$codigo."";
        $consulta = mysql_query($datos)
          or die ("Fallo la consulta");
        $fila2 = mysql_fetch_array($consulta);
		  }
		  echo "<select name='producto'>";
		  for ($i=0; $i<$nfila; $i++)
		  {
        $fila = mysql_fetch_array($consulta2);
        if ($fila["cod_producto"] == $fila2["cod_producto"]){
          echo "<option value='".$fila["cod_producto"]."' selected>".$fila["descripcion"]."</option>";
        } else {
          echo "<option value='".$fila["cod_producto"]."'>".$fila["descripcion"]."</option>";
        }
		  }
		  echo "</select>";
		?>
		</td>
	  </tr>
	  <tr>
		<td>Titulo: </td>
    <?php
    if ($ingresar=="NO"){
      $datos="SELECT titulo FROM promo_desc WHERE cod_promo_desc = ";
      $datos=$datos."".$codigo."";
      $consulta = mysql_query($datos)
        or die ("Fallo la consulta");
      $fila2 = mysql_fetch_array($consulta);
      echo "<td><INPUT type=text name=titulo SIZE=20 value='".$fila2["titulo"]."'></td>";
    } else {
      echo "<td><INPUT type=text name=titulo SIZE=20></td>";
    }
    ?>
	  </tr>
	  <tr>
		<td>Precio: </td>
    <?php
    if ($ingresar=="NO"){
      $datos="SELECT precio FROM promo_desc WHERE cod_promo_desc = ";
      $datos=$datos."".$codigo."";
      $consulta = mysql_query($datos)
        or die ("Fallo la consulta");
      $fila2 = mysql_fetch_array($consulta);
      echo "<td><INPUT type=number name=precio SIZE=13 min='1' max='1000000' step='any' value=".$fila2["precio"]."></td>";
    } else {
      echo "<td><INPUT type=number name=precio SIZE=13 min='1' max='1000000' step='any'></td>";
    }
    ?>
	  </tr>
	  <tr>
		<td>Descuento: </td>
    <?php
    if ($ingresar=="NO"){
      $datos="SELECT porcentaje FROM promo_desc WHERE cod_promo_desc = ";
      $datos=$datos."".$codigo."";
      $consulta = mysql_query($datos)
        or die ("Fallo la consulta");
      $fila2 = mysql_fetch_array($consulta);
      echo "<td><INPUT type=number name=descuento SIZE=5 min='1' max='100' value=".$fila2["porcentaje"]."></td>";
    } else {
      echo "<td><INPUT type=number name=descuento SIZE=5 min='1' max='100'></td>";
    }
    ?>
	  </tr>
	  <tr>
		<td>Descripcion: </td>
    <?php
    if ($ingresar=="NO"){
      $datos="SELECT descripcion FROM promo_desc WHERE cod_promo_desc = ";
      $datos=$datos."".$codigo."";
      $consulta = mysql_query($datos)
        or die ("Fallo la consulta");
      $fila2 = mysql_fetch_array($consulta);
      echo "<td><textarea name='descripcion' cols='30' rows='4'>".$fila2["descripcion"]."</textarea></td>";
    } else {
      echo "<td><textarea name='descripcion' cols='30' rows='4'></textarea></td>";
    }
    ?>
	  </tr>
	  <tr>
		<td>Fecha Desde: </td>
    <?php
    if ($ingresar=="NO"){
      $datos="SELECT fec_desde FROM promo_desc WHERE cod_promo_desc = ";
      $datos=$datos."".$codigo."";
      $consulta = mysql_query($datos)
        or die ("Fallo la consulta");
      $fila2 = mysql_fetch_array($consulta);
      echo "<td><input type='date' name='fecdes' value=".$fila2["fec_desde"]."></td>";
    } else {
      echo "<td><input type='date' name='fecdes' value=".date('Y-m-d')."></td>";
    }
    ?>
	  </tr>
	  <tr>
		<td>Fecha Hasta: </td>
    <?php
    if ($ingresar=="NO"){
      $datos="SELECT fec_hasta FROM promo_desc WHERE cod_promo_desc = ";
      $datos=$datos."".$codigo."";
      $consulta = mysql_query($datos)
        or die ("Fallo la consulta");
      $fila2 = mysql_fetch_array($consulta);
      echo "<td><input type='date' name='fechas' value=".$fila2["fec_hasta"]."></td>";
    } else {
      echo "<td><input type='date' name='fechas' value=".date('Y-m-d')."></td>";
    }
    ?>
	  </tr>
	  <tr>
		<td>Imagen</td>
		<td><input type="file" name="imagen" id="imagen" /></td>
		<td>Max: 16MB</td>
	  </tr>
	  <tr>
    <?php
    if ($ingresar=="NO"){
      //echo "<td><input type='submit' name='modificar' value='Modificar' /></td>";
      echo "<td><button type='submit' formaction='actualiza.php' name='modificar' value='Modificar'>Modificar</button></td>";
      echo "<td></td>";
    } else {
      echo "<td><input type='submit' name='ingresar' value='Ingresar' /></td>";
      echo "<td><input type='reset' value='Limpiar' /></td>";
    }
    ?>
		<td><button type="submit" formaction="menu.html">Menu</button></td>
	  </tr>
	  </table>
    </FORM> 
	
  </BODY>
</HTML>
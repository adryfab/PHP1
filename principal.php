<?php include ("bloqueDeSeguridad.php"); ?>
<HTML>
  <HEAD>
	<TITLE>Ingreso</TITLE>
	<!-- <link rel="stylesheet" href="estilo.css"> -->
	<link rel="stylesheet" href="w3.css">
  </HEAD>
  <BODY>
	<header class="w3-container w3-red">
	<img src="logo.png" class="w3-round-small">
	</header>
	<H2 class="w3-text-red">PROMOCIONES Y DESCUENTOS</H2>	
	<FORM name=form action="ingreso.php" method="post" enctype="multipart/form-data">
    <?php
    if (isset($_POST['ingreso'])) {
      $ingresar =$_POST['ingreso'];
    } else {
      $ingresar ="NO";
      $codigo = $_GET['cod_promo_desc'];
    }    
    ?>
    <?php
      require 'conexion.php';	  
      $conexion=mysql_connect($host,$user,$pass);
      if ($ingresar=="NO"){
        echo "<td><INPUT type=hidden name=codigo value=".$codigo."></td>";
      }
    ?>
    <div class="w3-container">
      <div class="w3-row-padding">
        <div class="w3-half">
          <label class="w3-label w3-text-grey"><b>Tipo:</b></label>
          <?php		
            $consulta2 = mysql_query("SELECT cod_tipo, descripcion FROM tipo WHERE estado = 'A' ORDER BY descripcion")
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
                echo "<option value='".$fila["cod_tipo"]."' selected 
                  class='w3-select w3-border'>".$fila["descripcion"]."</option>";
              } else {
                echo "<option value='".$fila["cod_tipo"]."' 
                  class='w3-select w3-border'>".$fila["descripcion"]."</option>";
              }
            }
            echo "</select>";
          ?>
          <a href="tipo.php">Editar</a>
        </div>
        <div class="w3-half">
          <label class="w3-label w3-text-grey"><b>Categoria:</b></label>
          <?php		
            $consulta2 = mysql_query("SELECT cod_categoria, descripcion FROM categoria WHERE estado = 'A' ORDER BY descripcion")
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
                echo "<option value='".$fila["cod_categoria"]."' selected 
                  class='w3-select w3-border'>".$fila["descripcion"]."</option>";
              } else {
                echo "<option value='".$fila["cod_categoria"]."' 
                  class='w3-select w3-border'>".$fila["descripcion"]."</option>";
              }
            }
            echo "</select>";
          ?>
          <a href="categoria.php">Editar</a>
        </div>
        <br>
        <br>
        <div class="w3-half">
          <label class="w3-label w3-text-grey"><b>Marca:</b></label>
          <?php
            $consulta2 = mysql_query("SELECT cod_marca, descripcion FROM marca WHERE estado = 'A' ORDER BY descripcion")
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
                echo "<option value='".$fila["cod_marca"]."' selected 
                  class='w3-select w3-border'>".$fila["descripcion"]."</option>";
              } else {
                echo "<option value='".$fila["cod_marca"]."' 
                  class='w3-select w3-border'>".$fila["descripcion"]."</option>";
              }
            }
            echo "</select>";
          ?>
          <a href="marca.php">Editar</a>
        </div>
        <div class="w3-half">
          <label class="w3-label w3-text-grey"><b>Producto:</b></label>
          <?php
            $consulta2 = mysql_query("SELECT cod_producto, descripcion FROM producto WHERE estado = 'A' ORDER BY descripcion")
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
                echo "<option value='".$fila["cod_producto"]."' selected 
                  class='w3-select w3-border'>".$fila["descripcion"]."</option>";
              } else {
                echo "<option value='".$fila["cod_producto"]."' 
                  class='w3-select w3-border'>".$fila["descripcion"]."</option>";
              }
            }
            echo "</select>";
          ?>
          <a href="producto.php">Editar</a>
        </div>
      </div>      
      <br>
      <label class="w3-label w3-text-grey"><b>Titulo:</b></label>
      <?php
      if ($ingresar=="NO"){
        $datos="SELECT titulo FROM promo_desc WHERE cod_promo_desc = ";
        $datos=$datos."".$codigo."";
        $consulta = mysql_query($datos)
          or die ("Fallo la consulta");
        $fila2 = mysql_fetch_array($consulta);
        echo "<td><INPUT type=text name=titulo maxlength='50' SIZE=50 value='".$fila2["titulo"]."' 
          class='w3-input w3-border'></td>";
      } else {
        echo "<td><INPUT type=text name=titulo maxlength='50' SIZE=50 
          class='w3-input w3-border'></td>";
      }
      ?>
      <br>
      <label class="w3-label w3-text-grey"><b>Precio:</b></label>
      <?php
      if ($ingresar=="NO"){
        $datos="SELECT precio FROM promo_desc WHERE cod_promo_desc = ";
        $datos=$datos."".$codigo."";
        $consulta = mysql_query($datos)
          or die ("Fallo la consulta");
        $fila2 = mysql_fetch_array($consulta);
        echo "<td><INPUT type=number name=precio maxlength='13' SIZE=13 min='0' max='1000000' step='any' value=".$fila2["precio"]." 
          class='w3-input w3-border'></td>";
      } else {
        echo "<td><INPUT type=number name=precio maxlength='13' SIZE=13 min='0' max='1000000' step='any' value = 0
          class='w3-input w3-border'></td>";
      }
      ?>
      <br>
      <label class="w3-label w3-text-grey"><b>Descuento:</b></label>
      <?php
      if ($ingresar=="NO"){
        $datos="SELECT porcentaje FROM promo_desc WHERE cod_promo_desc = ";
        $datos=$datos."".$codigo."";
        $consulta = mysql_query($datos)
          or die ("Fallo la consulta");
        $fila2 = mysql_fetch_array($consulta);
        echo "<td><INPUT type=number name=descuento maxlength='5' SIZE=5 min='0' max='100' value=".$fila2["porcentaje"]." 
          class='w3-input w3-border'></td>";
      } else {
        echo "<td><INPUT type=number name=descuento maxlength='5' SIZE=5 min='0' max='100' value = 0
          class='w3-input w3-border'></td>";
      }
      ?>
      <br>
      <label class="w3-label w3-text-grey"><b>Descripcion:</b></label>
      <?php
      if ($ingresar=="NO"){
        $datos="SELECT descripcion FROM promo_desc WHERE cod_promo_desc = ";
        $datos=$datos."".$codigo."";
        $consulta = mysql_query($datos)
          or die ("Fallo la consulta");
        $fila2 = mysql_fetch_array($consulta);
        echo "<td><textarea name='descripcion' cols='30' rows='4' 
          class='w3-input w3-border'>".$fila2["descripcion"]."</textarea></td>";
      } else {
        echo "<td><textarea name='descripcion' cols='30' rows='4' 
          class='w3-input w3-border'></textarea></td>";
      }
      ?>
      <br>
      <label class="w3-label w3-text-grey"><b>Fecha Desde:</b></label>
      <?php
      if ($ingresar=="NO"){
        $datos="SELECT fec_desde FROM promo_desc WHERE cod_promo_desc = ";
        $datos=$datos."".$codigo."";
        $consulta = mysql_query($datos)
          or die ("Fallo la consulta");
        $fila2 = mysql_fetch_array($consulta);
        echo "<td><input type='date' name='fecdes' value=".$fila2["fec_desde"]." 
          class='w3-input w3-border'></td>";
      } else {
        echo "<td><input type='date' name='fecdes' value=".date('Y-m-d')." 
          class='w3-input w3-border'></td>";
      }
      ?>
      <br>
      <label class="w3-label w3-text-grey"><b>Fecha Hasta:</b></label>
      <?php
      if ($ingresar=="NO"){
        $datos="SELECT fec_hasta FROM promo_desc WHERE cod_promo_desc = ";
        $datos=$datos."".$codigo."";
        $consulta = mysql_query($datos)
          or die ("Fallo la consulta");
        $fila2 = mysql_fetch_array($consulta);
        echo "<td><input type='date' name='fechas' value=".$fila2["fec_hasta"]." 
          class='w3-input w3-border'></td>";
      } else {
        echo "<td><input type='date' name='fechas' value=".date('Y-m-d')." 
          class='w3-input w3-border'></td>";
      }
      ?>
      <br>
      <label class="w3-label w3-text-grey"><b>Imagen:</b></label>
      <?php
      if ($ingresar=="NO"){
        $datos="SELECT nombre FROM imagenes WHERE cod_promo_desc = ";
        $datos=$datos."".$codigo."";
        $consulta = mysql_query($datos)
          or die ("Fallo la consulta");
        $fila2 = mysql_fetch_array($consulta);
        echo "<td><input type='file' name='imagen' id='imagen' 
          class='w3-input w3-border' />".$fila2["nombre"]."</td>";
      } else {
        echo "<td><input type='file' name='imagen' id='imagen' 
          class='w3-input w3-border' /></td>";
      }
      ?>
      
      <div class="w3-btn-group">
        <?php
        if ($ingresar=="NO"){
          echo "<td><button type='submit' formaction='actualiza.php' name='modificar' value='Modificar' 
            class='w3-btn w3-round-xxlarge w3-red w3-large w3-text-shadow'>Modificar</button></td>";
          echo "<td></td>";
        } else {
          echo "<td><input type='submit' name='ingresar' value='Ingresar' 
            class='w3-btn w3-round-xxlarge w3-red w3-large w3-text-shadow'/></td>";
          echo "<td><input type='reset' value='Limpiar' 
            class='w3-btn w3-round-xxlarge w3-red w3-large w3-text-shadow'/></td>";
        }
        ?>
        <button type="submit" formaction="menu.php" 
          class='w3-btn w3-round-xxlarge w3-red w3-large w3-text-shadow'>Menu</button>
      </div>
    </div>
    </FORM>
  </BODY>
</HTML>
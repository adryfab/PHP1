<?php
require 'conexion.php';
if ( !empty($_POST['submit']) ) {
  if ( !empty($_GET['id']) )		
    $id = $_GET['id'];
  
	// completamos la variable error si es necesario
	if ( empty($id) ) 	
    $error['id'] = true;
}

//Traer la promocion
$directory="imagen";
$dirint = dir($directory);
    
$query = "SELECT p.titulo, p.precio, p.porcentaje, p.descripcion, p.fec_hasta, i.nombre 
  FROM promo_desc p LEFT JOIN imagenes i ON i.cod_promo_desc = p.cod_promo_desc 
  WHERE p.cod_promo_desc = " . $_GET['id'] . " LIMIT 1";
$resultado = mysql_query ($query);
$noticia = mysql_fetch_assoc ($resultado);
$imagen = "<img src='".$directory."/".$noticia['nombre']."'>";
//<img src="imagen/nombre">
?>

<HTML>
  <HEAD>
	<TITLE>DETALLE</TITLE>
	<!-- <link rel="stylesheet" href="estilo.css"> -->
	<link rel="stylesheet" href="w3.css">
  </HEAD>
  <BODY>
    <header class="w3-container w3-red">
    <img src="logo.png" class="w3-round-small">
    </header>
    <!-- <H2 class="w3-text-red">PROMOCIONES Y DESCUENTOS</H2> -->
    <h2 class="w3-text-red"><?php echo $noticia['titulo']; ?></h2>
    <form action="verpromo.php" method="post">
      <p>Precio: $<?php echo $noticia['precio']; ?></p>
      <p>Descuento: <?php echo $noticia['porcentaje']; ?>%</p>
      <div><?php echo $noticia['descripcion']; ?></div>
      <p>Hasta: <?php echo $noticia['fec_hasta']; ?></p>
      <div><?php echo $imagen ?></div>      
      <br>
      <td><button type="submit" formaction="menu.php"
        class="w3-btn w3-round-xxlarge w3-red w3-text-shadow" w3-border'>Regresar</button></td>

    </form>
  </BODY>
</HTML>

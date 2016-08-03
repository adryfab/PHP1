<?php include ("bloqueDeSeguridad.php"); ?>
<?php
require 'conexion.php';

//Traer listado de promociones y descuentos
$arrNoticias = array();
$query = "SELECT cod_promo_desc, titulo, precio, porcentaje, descripcion, fec_hasta 
  FROM promo_desc WHERE fec_hasta>= CURDATE() ORDER BY fec_hasta DESC, titulo";
$resultado = mysql_query ($query);
while ( $row = mysql_fetch_assoc ($resultado)) {
	array_push( $arrNoticias,$row );
}
?>
<HTML>
  <HEAD>
	<TITLE>Menu Principal</TITLE>
	<!-- <link rel="stylesheet" href="estilo.css"> -->
	<link rel="stylesheet" href="w3.css">
  </HEAD>
  <BODY>
	<header class="w3-container w3-red">
	<img src="logo.png" class="w3-round-small">
	</header>
	<H2 class="w3-text-red">MENU PRINCIPAL</H2>
	<form action="ingreso.php" method="post">
		<div class="w3-btn-bar w3-red">
			<button type="submit" formaction="buscar.php" 
				class="w3-btn w3-round-xxlarge w3-red w3-text-shadow w3-padding-xxlarge">Buscar</button>
			<button type="submit" formaction="principal.php" 
				class="w3-btn w3-round-xxlarge w3-red w3-text-shadow w3-padding-xxlarge">Ingresar</button>
			<input type=hidden name=ingreso value=SI>
		</div>

    <?php foreach ( $arrNoticias as $noticias ) { ?>
    <div>
      <h3><a href="verpromo.php?id=<? echo $noticias['cod_promo_desc']; ?>">
        <?php echo $noticias['titulo']; ?></a></h3>
      <!-- <p>Precio: $<?php echo $noticias['precio']; ?></p> -->
      <!-- <p>Descuento: <?php echo $noticias['porcentaje']; ?>%</p> -->
    </div>
    <?php } ?>
    
	</form>
  </BODY>
</HTML>

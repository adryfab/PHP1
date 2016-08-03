<?php
  header('Content-Type: text/xml'); //Indicamos al navegador que es un documento en XML 
  //Versión y juego de carácteres de nuestro documento 
  echo "<?xml version='1.0' encoding='iso-8859-1'?>"; 
  
  require 'conexion.php';	  
  $conexion=mysql_connect($host,$user,$pass);

  //Traer listado de promociones y descuentos
  $arrNoticias = array();
  $query = "SELECT p.cod_promo_desc, p.titulo, p.precio, p.porcentaje, 
    p.descripcion as promo_des, p.fec_hasta, c.descripcion as categoria, 
    i.nombre as imagen
    FROM promo_desc p INNER JOIN categoria c ON c.cod_categoria = p.cod_categoria 
    LEFT JOIN imagenes i ON i.cod_promo_desc = p.cod_promo_desc 
    WHERE p.fec_hasta >= CURDATE() AND p.fec_desde >= CURDATE() 
    ORDER BY p.fec_hasta DESC, p.titulo";
  $resultado = mysql_query ($query);
  
  // Y generamos nuestro documento 
  echo "<rss version='2.0' xmlns:atom='http://www.w3.org/2005/Atom'>";
  echo "<channel>";
  echo "<title>Promociones y Descuentos</title>";
  echo "<link>http://promodescuento.comli.com/</link>";
  echo "<language>es-CL</language>";
  echo "<description>Las mejores promociones y descuentos del Ecuador</description>";
  echo "<generator>AMC</generator>";
  
  while ( $row = mysql_fetch_assoc ($resultado)) {
    array_push( $arrNoticias,$row );
    echo "<item>";
    echo "<title>".$row['titulo']."</title>";
    echo "<link>http://promodescuento.comli.com/verpromo.php?id=".$row['cod_promo_desc']."</link>";
    echo "<category>".$row['categoria']."</category>";
    echo "<media:thumbnail xmlns:media='http://search.yahoo.com/mrss/' 
      url='http://promodescuento.comli.com/imagen/".$row['imagen']."' height='72' width='72'/>";
    echo "<description>";
    if ( !empty($row['imagen']) ) {
      echo "&lt;div class='separator' style='clear: both; text-align: center;'&gt; ";
      echo "&lt;a href='http://promodescuento.comli.com/imagen/".$row['imagen']."' ";
      echo "imageanchor='1' style='margin-left: 1em; margin-right: 1em;'&gt; ";
      echo "&lt;img border='0' height='544' ";
      echo "src='http://promodescuento.comli.com/imagen/".$row['imagen']."' ";
      echo "width='640' /&gt;";
      echo "&lt;/div&gt;";
    }
    echo $row['promo_des'];
    echo "</description>";
    echo "</item>";
  }
  echo "</channel>";
  echo "</rss>";
?>


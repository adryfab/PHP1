<?php include ("bloqueDeSeguridad.php"); ?>
<?php
  require 'conexion.php';	  
  $conexion=mysql_connect($host,$user,$pass);
  
  // borramos producto
  if ( !empty($_GET['del']) ) {    
    $query  = "DELETE FROM producto WHERE cod_producto = {$_GET['del']}";
    $result = mysql_query($query);
    header( 'Location: producto.php?dele=true' );
    die;	
  }
  
  // agregamos producto en la db
  // si se envio el formulario
  if ( !empty($_POST['submit']) ) {
    // definimos las variables
    if ( !empty($_POST['nombre']) ) 	
      $nombre = $_POST['nombre'];
    
    // completamos la variable error si es necesario
    if ( empty($nombre) ) 	
      $error['nombre'] 	= 'Es obligatorio completar el nombre del producto';
    
    // si no hay errores registramos producto
    if ( empty($error) ) {
      // inserto los datos de registro en la db
      $query  = "INSERT INTO producto (descripcion, estado) VALUES ('$nombre', 'A')";
      $result = mysql_query($query);
      header( 'Location: producto.php?add=true' );
      die;
    }
  }
  
  //Editamos producto
  if ( !empty($_POST['submitEdit']) ) {
    // definimos las variables
    if ( !empty($_POST['nombre']) ) 		
      $nombre = $_POST['nombre'];
    
    if ( !empty($_POST['idproducto']) ) 	
      $idproducto = $_POST['idproducto'];

    // completamos la variable error si es necesario
    if ( empty($nombre) ) 		
      $error['nombre'] 	= 'Es obligatorio completar el nombre del producto';
    
    if ( empty($idproducto) ) 	
      $error['idproducto'] = 'Falta ID del producto';

    // si no hay errores registramos al usuario
    if ( empty($error) ) {
      // inserto los datos de registro en la db
      $query  = "UPDATE producto set descripcion = '$nombre' WHERE cod_producto = $idproducto";
      $result = mysql_query($query);
      
      header( 'Location: producto.php?edit=true' );
      die;
    }
  }
  
  // traemos listado de productos
  $arrproducto = array();
  $query = "SELECT cod_producto, descripcion FROM producto ORDER BY descripcion ASC";
  $resultado = mysql_query ($query);
  while ( $row = mysql_fetch_assoc ($resultado)) {
    array_push( $arrproducto,$row );
  }

  // si tenemos producto puntual
  if ( !empty($_GET['id']) ) {
    // traemos producto
    $query = "SELECT cod_producto, descripcion FROM producto WHERE cod_producto = {$_GET['id']}";
    $resultado = mysql_query ($query);
    $row = mysql_fetch_assoc ($resultado);
  }
?>
<HTML>
  <HEAD>
    <TITLE>PRODUCTO</TITLE>
    <!-- <link rel="stylesheet" href="estilo.css"> -->
    <link rel="stylesheet" href="w3.css">
  </HEAD>
  <BODY>
    <header class="w3-container w3-red">
    <img src="logo.png" class="w3-round-small">
    </header>
    <H2 class="w3-text-red">PRODUCTOS</H2>	
    <FORM name=form action="producto.php" method="post">
      <?php if ( !empty($_GET['add']) ) { ?>
      <div>El producto se agrego con exito.</div>
      <?php } elseif ( !empty($_GET['dele']) ) { ?>
      <div>El producto se borro con exito.</div>
      <?php } elseif ( !empty($_GET['edit']) ) { ?>
      <div>El producto se edito con exito.</div>      
      <?php } ?>
      
      <div>
        <h3>Listado de productos</h3>
        <table class='w3-table-all'>
          <tr class='w3-red'>
            <th>ID</th>
            <th>PRODUCTO</th>
            <th></th>
          </tr>
          <?php foreach ($arrproducto as $producto) { ?>
          <tr>
            <td><?php echo $producto['cod_producto']; ?></td>
            <td><?php echo $producto['descripcion']; ?></td>
            <td><a href="producto.php?id=<?php echo $producto['cod_producto']; ?>">Editar</a> - 
                <a href="producto.php?del=<?php echo $producto['cod_producto'] ?>">Borrar</a>          
          </tr>
          <?php } ?>
        </table>
      </div>
      
      <?php if ( empty($_GET['id']) ) { ?>
        <div>
          <h3 id="add">Agregar nuevo producto</h3>
          <?php if (!empty($error)) { ?>
            <ul>
              <?php foreach ($error as $mensaje) { ?>
                <li><?php echo $mensaje ?></li>
              <?php } ?>
            </ul>
          <?php } ?>
          <!-- <FORM name=form action="producto.php" method="post"> -->
            <p>
              <label for="nombre" 
                class="w3-label w3-text-grey">Nombre del producto</label><br />
              <input name="nombre" type="text" value="" class='w3-input w3-border'/>
            </p>
            <p>
              <input name="submit" type="submit" value="Agregar" 
                class='w3-btn w3-round-xxlarge w3-red w3-large w3-text-shadow'/>
            </p>
          <!-- </form> -->
        </div>
      <?php } ?>
      
      <?php if ( !empty($_GET['id']) ) { ?>
        <div>
          <h3 id="add">Editar producto</h3>
          <?php if (!empty($error)) { ?>
            <ul>
              <?php foreach ($error as $mensaje) { ?>
                <li><?php echo $mensaje ?></li>
              <?php } ?>
            </ul>
          <?php } ?>
          <!-- <FORM name=form action="producto.php" method="post"> -->
            <p>
              <label for="nombre"
                class="w3-label w3-text-grey">Nombre del producto</label><br />
              <input name="nombre" type="text" value="<?php echo $row['descripcion']; ?>" 
                class='w3-input w3-border'/>
            </p>
            <p>
              <input name="idproducto" type="hidden" value="<?php echo $row['cod_producto']; ?>" />
              <input name="submitEdit" type="submit" value="Editar" 
                class='w3-btn w3-round-xxlarge w3-red w3-large w3-text-shadow'/>
            </p>
          <!-- </FORM> -->
        </div>
      <?php } ?>
      
      <br>
      <td><button type="submit" formaction="menu.php"
        class="w3-btn w3-round-xxlarge w3-red w3-text-shadow" w3-border'>Regresar</button></td>
      
    </FORM>
  </BODY>
</HTML>

<?php include ("bloqueDeSeguridad.php"); ?>
<?php
  require 'conexion.php';	  
  $conexion=mysql_connect($host,$user,$pass);
  
  // borramos marca
  if ( !empty($_GET['del']) ) {    
    $query  = "DELETE FROM marca WHERE cod_marca = {$_GET['del']}";
    $result = mysql_query($query);
    header( 'Location: marca.php?dele=true' );
    die;	
  }
  
  // agregamos marca en la db
  // si se envio el formulario
  if ( !empty($_POST['submit']) ) {
    // definimos las variables
    if ( !empty($_POST['nombre']) ) 	
      $nombre = $_POST['nombre'];
    
    // completamos la variable error si es necesario
    if ( empty($nombre) ) 	
      $error['nombre'] 	= 'Es obligatorio completar el nombre de la marca';
    
    // si no hay errores registramos marca
    if ( empty($error) ) {
      // inserto los datos de registro en la db
      $query  = "INSERT INTO marca (descripcion, estado) VALUES ('$nombre', 'A')";
      $result = mysql_query($query);
      header( 'Location: marca.php?add=true' );
      die;
    }
  }
  
  //Editamos marca
  if ( !empty($_POST['submitEdit']) ) {
    // definimos las variables
    if ( !empty($_POST['nombre']) ) 		
      $nombre = $_POST['nombre'];
    
    if ( !empty($_POST['idmarca']) ) 	
      $idmarca = $_POST['idmarca'];

    // completamos la variable error si es necesario
    if ( empty($nombre) ) 		
      $error['nombre'] 	= 'Es obligatorio completar el nombre de la marca';
    
    if ( empty($idmarca) ) 	
      $error['idmarca'] = 'Falta ID de la marca';

    // si no hay errores registramos al usuario
    if ( empty($error) ) {
      // inserto los datos de registro en la db
      $query  = "UPDATE marca set descripcion = '$nombre' WHERE cod_marca = $idmarca";
      $result = mysql_query($query);
      
      header( 'Location: marca.php?edit=true' );
      die;
    }
  }
  
  // traemos listado de marcas
  $arrmarca = array();
  $query = "SELECT cod_marca, descripcion FROM marca ORDER BY descripcion ASC";
  $resultado = mysql_query ($query);
  while ( $row = mysql_fetch_assoc ($resultado)) {
    array_push( $arrmarca,$row );
  }

  // si tenemos marca puntual
  if ( !empty($_GET['id']) ) {
    // traemos marca
    $query = "SELECT cod_marca, descripcion FROM marca WHERE cod_marca = {$_GET['id']}";
    $resultado = mysql_query ($query);
    $row = mysql_fetch_assoc ($resultado);
  }
?>
<HTML>
  <HEAD>
    <TITLE>marca</TITLE>
    <!-- <link rel="stylesheet" href="estilo.css"> -->
    <link rel="stylesheet" href="w3.css">
  </HEAD>
  <BODY>
    <header class="w3-container w3-red">
    <img src="logo.png" class="w3-round-small">
    </header>
    <H2 class="w3-text-red">MARCAS</H2>	
    <FORM name=form action="marca.php" method="post">
      <?php if ( !empty($_GET['add']) ) { ?>
      <div>La marca se agrego con exito.</div>
      <?php } elseif ( !empty($_GET['dele']) ) { ?>
      <div>La marca se borro con exito.</div>
      <?php } elseif ( !empty($_GET['edit']) ) { ?>
      <div>La marca se edito con exito.</div>      
      <?php } ?>
      
      <div>
        <h3>Listado de marcas</h3>
        <table class='w3-table-all'>
          <tr class='w3-red'>
            <th>ID</th>
            <th>MARCA</th>
            <th></th>
          </tr>
          <?php foreach ($arrmarca as $marca) { ?>
          <tr>
            <td><?php echo $marca['cod_marca']; ?></td>
            <td><?php echo $marca['descripcion']; ?></td>
            <td><a href="marca.php?id=<?php echo $marca['cod_marca']; ?>">Editar</a> - 
                <a href="marca.php?del=<?php echo $marca['cod_marca'] ?>">Borrar</a>          
          </tr>
          <?php } ?>
        </table>
      </div>
      
      <?php if ( empty($_GET['id']) ) { ?>
        <div>
          <h3 id="add">Agregar nueva marca</h3>
          <?php if (!empty($error)) { ?>
            <ul>
              <?php foreach ($error as $mensaje) { ?>
                <li><?php echo $mensaje ?></li>
              <?php } ?>
            </ul>
          <?php } ?>
          <!-- <FORM name=form action="marca.php" method="post"> -->
            <p>
              <label for="nombre" 
                class="w3-label w3-text-grey">Nombre de la marca</label><br />
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
          <h3 id="add">Editar marca</h3>
          <?php if (!empty($error)) { ?>
            <ul>
              <?php foreach ($error as $mensaje) { ?>
                <li><?php echo $mensaje ?></li>
              <?php } ?>
            </ul>
          <?php } ?>
          <!-- <FORM name=form action="marca.php" method="post"> -->
            <p>
              <label for="nombre"
                class="w3-label w3-text-grey">Nombre de la marca</label><br />
              <input name="nombre" type="text" value="<?php echo $row['descripcion']; ?>" 
                class='w3-input w3-border'/>
            </p>
            <p>
              <input name="idmarca" type="hidden" value="<?php echo $row['cod_marca']; ?>" />
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

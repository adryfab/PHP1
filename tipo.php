<?php include ("bloqueDeSeguridad.php"); ?>
<?php
  require 'conexion.php';	  
  $conexion=mysql_connect($host,$user,$pass);
  
  // borramos un tipo
  if ( !empty($_GET['del']) ) {    
    $query  = "DELETE FROM tipo WHERE cod_tipo = {$_GET['del']}";
    $result = mysql_query($query);
    header( 'Location: tipo.php?dele=true' );
    die;	
  }
  
  // agregamos un tipo en la db
  // si se envio el formulario
  if ( !empty($_POST['submit']) ) {
    // definimos las variables
    if ( !empty($_POST['nombre']) ) 	
      $nombre = $_POST['nombre'];
    
    // completamos la variable error si es necesario
    if ( empty($nombre) ) 	
      $error['nombre'] 	= 'Es obligatorio completar el nombre del tipo';
    
    // si no hay errores registramos el tipo
    if ( empty($error) ) {
      // inserto los datos de registro en la db
      $query  = "INSERT INTO tipo (descripcion, estado) VALUES ('$nombre', 'A')";
      $result = mysql_query($query);
      header( 'Location: tipo.php?add=true' );
      die;
    }
  }
  
  //Editamos un tipo
  if ( !empty($_POST['submitEdit']) ) {
    // definimos las variables
    if ( !empty($_POST['nombre']) ) 		
      $nombre = $_POST['nombre'];
    
    if ( !empty($_POST['idTipo']) ) 	
      $idTipo = $_POST['idTipo'];

    // completamos la variable error si es necesario
    if ( empty($nombre) ) 		
      $error['nombre'] 	= 'Es obligatorio completar el nombre del tipo';
    
    if ( empty($idTipo) ) 	
      $error['idTipo'] = 'Falta ID del tipo';

    // si no hay errores registramos al usuario
    if ( empty($error) ) {
      // inserto los datos de registro en la db
      $query  = "UPDATE tipo set descripcion = '$nombre' WHERE cod_tipo = $idTipo";
      $result = mysql_query($query);
      
      header( 'Location: tipo.php?edit=true' );
      die;
    }
  }
  
  // traemos listado de tipos
  $arrTipo = array();
  $query = "SELECT cod_tipo, descripcion FROM tipo ORDER BY descripcion ASC";
  $resultado = mysql_query ($query);
  while ( $row = mysql_fetch_assoc ($resultado)) {
    array_push( $arrTipo,$row );
  }

  // si tenemos un tipo puntual
  if ( !empty($_GET['id']) ) {
    // traemos un tipo
    $query = "SELECT cod_tipo, descripcion FROM tipo WHERE cod_tipo = {$_GET['id']}";
    $resultado = mysql_query ($query);
    $row = mysql_fetch_assoc ($resultado);
  }
?>
<HTML>
  <HEAD>
    <TITLE>Tipo</TITLE>
    <!-- <link rel="stylesheet" href="estilo.css"> -->
    <link rel="stylesheet" href="w3.css">
  </HEAD>
  <BODY>
    <header class="w3-container w3-red">
    <img src="logo.png" class="w3-round-small">
    </header>
    <H2 class="w3-text-red">TIPOS</H2>	
    <FORM name=form action="tipo.php" method="post">
      <?php if ( !empty($_GET['add']) ) { ?>
      <div>El tipo se agrego con exito.</div>
      <?php } elseif ( !empty($_GET['dele']) ) { ?>
      <div>El tipo se borro con exito.</div>
      <?php } elseif ( !empty($_GET['edit']) ) { ?>
      <div>El tipo se edito con exito.</div>      
      <?php } ?>
      
      <div>
        <h3>Listado de Tipos</h3>
        <table class='w3-table-all'>
          <tr class='w3-red'>
            <th>ID</th>
            <th>TIPO</th>
            <th></th>
          </tr>
          <?php foreach ($arrTipo as $tipo) { ?>
          <tr>
            <td><?php echo $tipo['cod_tipo']; ?></td>
            <td><?php echo $tipo['descripcion']; ?></td>
            <td><a href="tipo.php?id=<?php echo $tipo['cod_tipo']; ?>">Editar</a> - 
                <a href="tipo.php?del=<?php echo $tipo['cod_tipo'] ?>">Borrar</a>          
          </tr>
          <?php } ?>
        </table>
      </div>
      
      <?php if ( empty($_GET['id']) ) { ?>
        <div>
          <h3 id="add">Agregar nuevo Tipo</h3>
          <?php if (!empty($error)) { ?>
            <ul>
              <?php foreach ($error as $mensaje) { ?>
                <li><?php echo $mensaje ?></li>
              <?php } ?>
            </ul>
          <?php } ?>
          <!-- <FORM name=form action="tipo.php" method="post"> -->
            <p>
              <label for="nombre" 
                class="w3-label w3-text-grey">Nombre del Tipo</label><br />
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
          <h3 id="add">Editar Tipo</h3>
          <?php if (!empty($error)) { ?>
            <ul>
              <?php foreach ($error as $mensaje) { ?>
                <li><?php echo $mensaje ?></li>
              <?php } ?>
            </ul>
          <?php } ?>
          <!-- <FORM name=form action="tipo.php" method="post"> -->
            <p>
              <label for="nombre"
                class="w3-label w3-text-grey">Nombre del Tipo</label><br />
              <input name="nombre" type="text" value="<?php echo $row['descripcion']; ?>" 
                class='w3-input w3-border'/>
            </p>
            <p>
              <input name="idTipo" type="hidden" value="<?php echo $row['cod_tipo']; ?>" />
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

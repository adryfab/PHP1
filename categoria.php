<?php include ("bloqueDeSeguridad.php"); ?>
<?php
  require 'conexion.php';	  
  $conexion=mysql_connect($host,$user,$pass);
  
  // borramos un categoria
  if ( !empty($_GET['del']) ) {    
    $query  = "DELETE FROM categoria WHERE cod_categoria = {$_GET['del']}";
    $result = mysql_query($query);
    header( 'Location: categoria.php?dele=true' );
    die;	
  }
  
  // agregamos categoria en la db
  // si se envio el formulario
  if ( !empty($_POST['submit']) ) {
    // definimos las variables
    if ( !empty($_POST['nombre']) ) 	
      $nombre = $_POST['nombre'];
    
    // completamos la variable error si es necesario
    if ( empty($nombre) ) 	
      $error['nombre'] 	= 'Es obligatorio completar el nombre de la categoria';
    
    // si no hay errores registramos categoria
    if ( empty($error) ) {
      // inserto los datos de registro en la db
      $query  = "INSERT INTO categoria (descripcion, estado) VALUES ('$nombre', 'A')";
      $result = mysql_query($query);
      header( 'Location: categoria.php?add=true' );
      die;
    }
  }
  
  //Editamos categoria
  if ( !empty($_POST['submitEdit']) ) {
    // definimos las variables
    if ( !empty($_POST['nombre']) ) 		
      $nombre = $_POST['nombre'];
    
    if ( !empty($_POST['idcategoria']) ) 	
      $idcategoria = $_POST['idcategoria'];

    // completamos la variable error si es necesario
    if ( empty($nombre) ) 		
      $error['nombre'] 	= 'Es obligatorio completar el nombre de la categoria';
    
    if ( empty($idcategoria) ) 	
      $error['idcategoria'] = 'Falta ID de la categoria';

    // si no hay errores registramos al usuario
    if ( empty($error) ) {
      // inserto los datos de registro en la db
      $query  = "UPDATE categoria set descripcion = '$nombre' WHERE cod_categoria = $idcategoria";
      $result = mysql_query($query);
      
      header( 'Location: categoria.php?edit=true' );
      die;
    }
  }
  
  // traemos listado de categorias
  $arrcategoria = array();
  $query = "SELECT cod_categoria, descripcion FROM categoria ORDER BY descripcion ASC";
  $resultado = mysql_query ($query);
  while ( $row = mysql_fetch_assoc ($resultado)) {
    array_push( $arrcategoria,$row );
  }

  // si tenemos categoria puntual
  if ( !empty($_GET['id']) ) {
    // traemos categoria
    $query = "SELECT cod_categoria, descripcion FROM categoria WHERE cod_categoria = {$_GET['id']}";
    $resultado = mysql_query ($query);
    $row = mysql_fetch_assoc ($resultado);
  }
?>
<HTML>
  <HEAD>
    <TITLE>CATEGORIA</TITLE>
    <!-- <link rel="stylesheet" href="estilo.css"> -->
    <link rel="stylesheet" href="w3.css">
  </HEAD>
  <BODY>
    <header class="w3-container w3-red">
    <img src="logo.png" class="w3-round-small">
    </header>
    <H2 class="w3-text-red">CATEGORIAS</H2>	
    <FORM name=form action="categoria.php" method="post">
      <?php if ( !empty($_GET['add']) ) { ?>
      <div>La categoria se agrego con exito.</div>
      <?php } elseif ( !empty($_GET['dele']) ) { ?>
      <div>La categoria se borro con exito.</div>
      <?php } elseif ( !empty($_GET['edit']) ) { ?>
      <div>La categoria se edito con exito.</div>      
      <?php } ?>
      
      <div>
        <h3>Listado de categorias</h3>
        <table class='w3-table-all'>
          <tr class='w3-red'>
            <th>ID</th>
            <th>CATEGORIA</th>
            <th></th>
          </tr>
          <?php foreach ($arrcategoria as $categoria) { ?>
          <tr>
            <td><?php echo $categoria['cod_categoria']; ?></td>
            <td><?php echo $categoria['descripcion']; ?></td>
            <td><a href="categoria.php?id=<?php echo $categoria['cod_categoria']; ?>">Editar</a> - 
                <a href="categoria.php?del=<?php echo $categoria['cod_categoria'] ?>">Borrar</a>          
          </tr>
          <?php } ?>
        </table>
      </div>
      
      <?php if ( empty($_GET['id']) ) { ?>
        <div>
          <h3 id="add">Agregar nueva categoria</h3>
          <?php if (!empty($error)) { ?>
            <ul>
              <?php foreach ($error as $mensaje) { ?>
                <li><?php echo $mensaje ?></li>
              <?php } ?>
            </ul>
          <?php } ?>
          <!-- <FORM name=form action="categoria.php" method="post"> -->
            <p>
              <label for="nombre" 
                class="w3-label w3-text-grey">Nombre de la categoria</label><br />
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
          <h3 id="add">Editar categoria</h3>
          <?php if (!empty($error)) { ?>
            <ul>
              <?php foreach ($error as $mensaje) { ?>
                <li><?php echo $mensaje ?></li>
              <?php } ?>
            </ul>
          <?php } ?>
          <!-- <FORM name=form action="categoria.php" method="post"> -->
            <p>
              <label for="nombre"
                class="w3-label w3-text-grey">Nombre de la categoria</label><br />
              <input name="nombre" type="text" value="<?php echo $row['descripcion']; ?>" 
                class='w3-input w3-border'/>
            </p>
            <p>
              <input name="idcategoria" type="hidden" value="<?php echo $row['cod_categoria']; ?>" />
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

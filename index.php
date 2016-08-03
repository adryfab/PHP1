<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Login</title>
  <!-- <link rel="stylesheet" href="estilo.css"> -->
  <link rel="stylesheet" href="w3.css">
</head>

<body>
  <header class="w3-container w3-red">
  <img src="logo.png" class="w3-round-small">
  </header>
  
  <H3 class="w3-text-red">INGRESO DE USUARIO Y CONTRASEÑA</H3>
  <FORM name=form action="autenticacion.php" method="post">
		<?php
		if (isset($_GET["errorusuario"])){
			if ($_GET["errorusuario"]=="si"){
				echo "Error, Introduzca datos nuevamente";
			}
		}
		?>

    <label class="w3-label w3-text-grey"><b>Usuario:</b></label>
    <input name="usuario" size="25" value="" class="w3-input w3-border" />
    <br>
    <label class="w3-label w3-text-grey"><b>Contraseña:</b></label>
    <input name="contrasena" size="25" type="password" class="w3-input w3-border"/>
    <br>
    <input type="submit" value="Acceder" class="w3-btn w3-red"/>    
  </FORM> 
</body>
</html>
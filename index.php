<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Login</title>
</head>

<body>
  <H3>INGRESO DE USUARIO Y CONTRASEÑA</H3>
  <FORM name=form action="autenticacion.php" method="post">
    <table border='0'; style="background-color:33F4FF; color:blue; font-size:23px">
	  <tr>
		<td>
		<?php
		if (isset($_GET["errorusuario"])){
			if ($_GET["errorusuario"]=="si"){
				echo "Error, Introduzca datos nuevamente";
			}
		}
		?>
		</td>
	  </tr>
	  <tr>
		<td>Usuario: </td>
		<td><input name="usuario" size="25" value=""/></td>
	  </tr>
	  <tr>
		<td>Contraseña: </td>
		<td><input name="contrasena" size="25" type="password"/></td>
	  </tr>
	  <tr>
		<!-- <td> <INPUT onclick=go() type=button value=Acceder> </td> -->
		<td><input type="submit" value="Acceder"/></td>
	  </tr>
	</table>
  </FORM> 
</body>
</html>
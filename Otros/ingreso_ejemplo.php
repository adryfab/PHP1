<HTML>
<HEAD>
 <TITLE>Ingreso de Programas</TITLE>
</HEAD>
<BODY>
<?
  $codigo = $_POST['codigo'];
  $programa = $_POST['nombre'];
  $idioma = $_POST['idioma'];
  $version = $_POST['version'];
  $proveedor = $_POST['proveedor'];
  $ingresar = $_POST['ingresar'];

  $host='http://tteessiiss.site88.net/';
  $user='a4537949_tesis';
  $pass='Iluminy159753';
  $conexion=mysql_connect($host,$user,$pass);

  if ($ingresar=="Ingresar")
  {
    mysql_select_db('nuevos_programas',$conexion);
    $datos="INSERT INTO `programa` (`codigo`, `programa`, `idioma`, `version`, `proveedor`) VALUES(";
    $datos=$datos.$codigo.",";
    $datos=$datos."'".$programa."',";
    $datos=$datos."'".$idioma."',";
    $datos=$datos."'".$version."',";
    $datos=$datos."'".$proveedor."')";

    $consulta=mysql_query($datos,$conexion);
    if(!$consulta){
	  echo 'Error al insertar los datos <br>';
    }else{
	  echo 'Los datos se insertaron correctamente <br>';
    }
  }
  else
  {
    mysql_select_db('nuevos_programas',$conexion);
    echo "<h2>Listado de Programas</h2>";
    echo "<table border='1'>\n";
    echo "<tr>\n";
    echo "<td>Codigo</td>\n";
    echo "<td>Programa</td>\n";
    echo "<td>Idioma</td>\n";
    echo "<td>Version</td>\n";
    echo "<td>Proveedor</td>\n";
    echo "</tr>\n";

    $consulta2 = mysql_query("Select * from programa",$conexion)
      or die ("Fallo la consulta");
    $nfila = mysql_num_rows ($consulta2);
    for ($i=0; $i<$nfila; $i++)
    {
      $fila = mysql_fetch_array($consulta2);
      echo "<tr>\n";
      echo "<td>".$fila["codigo"]."</td>\n";
      echo "<td>".$fila["programa"]."</td>\n";
      echo "<td>".$fila["idioma"]."</td>\n";
      echo "<td>".$fila["version"]."</td>\n";
      echo "<td>".$fila["proveedor"]."</td>\n";
      echo "</tr>\n";
    }
    echo "</table>\n";
  }
  
?>
</BODY>
</HTML>

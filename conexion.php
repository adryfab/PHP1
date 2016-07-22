<?php

//conexion a la base de datos

//$host='mysql6.000webhost.com';
//$user='a5048790_ProDes';
//$pass='ProDes123';
//$base_de_datos = "a5048790_ProDes";

$host='localhost';
$user='root';
$pass='';
$base_de_datos = "PromoDes";

mysql_connect($host,$user,$pass) or die(mysql_error()) ;
mysql_select_db($base_de_datos) or die(mysql_error()) ;

?>

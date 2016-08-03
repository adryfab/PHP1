<?php

//conexion a la base de datos

//$host='mysql6.000webhost.com';
$host='localhost';
//$user='a5048790_ProDes';
$user='root';
//$pass='ProDes123';
$pass='';
//$base_de_datos = "a5048790_ProDes";
$base_de_datos = "PromoDes";

mysql_connect($host,$user,$pass) or die(mysql_error()) ;
mysql_select_db($base_de_datos) or die(mysql_error()) ;

?>

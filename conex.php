<?php
$conex=mysql_connect("localhost","root","")or die ("Error al conectar el servidor".mysql_error());
$base=mysql_select_db("practicamvc",$conex)or die("Error al conectar BD".mysql_error());
mysql_query("SET NAMES 'utf8'");
?>
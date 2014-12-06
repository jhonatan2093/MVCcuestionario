<body role="document">
<?php
//modelo vist
//controlador es un framework
//Auotor Jhonatan Gtz Gtz
/*-Mandar a llamar librerias auxiliares
-obtener*/
require('header.php');
require ('helpers.php');
if(empty($_GET['url']))
$_GET['url']='home';
controller($_GET['url']);


$idu=$_COOKIE['idu'];
$accesos=$_COOKIE['acceso'];
if($idu=="" or $accesos=="")
{
print"<meta http-equiv='refresh' content='0;url=index.php?msg='>";
exit;
}
session_start();
$idu2=$_SESSION['idu'];
$acceso2=$_SESSION['acceso'];
if($idu2=="" or $acceso2=="")
{
print"<meta http-equiv='refresh' content='0;url=index.php?msg='>";
exit;
}

			$conexion=mysql_connect("localhost","root","")or die("Error al conectar el servidor".mysql_error());
$base=mysql_select_db("practicamvc",$conexion)or die("Error al conectar la BD".mysql_error());
			$sql="select * from usuario where id_usuario=$idu";
			$consulta=mysql_query($sql) or die ('Error Consulta');
			$nombre=mysql_result($consulta,0,'nombre');
		require('menu.php');
?>



 

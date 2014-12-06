<?php

	$user=$_GET['user'];
	$psw=$_REQUEST['psw'];
	
	if($user=="" or $psw=="")
	{
	$msg="llenar los campos antes de continuar";
	print "<meta http-equiv='refresh' content='0;url=index.php?msg=$msg'>";
	exit;
	}
	
		$conexion=mysql_connect("localhost","root","")or die("Error al conectar el servidor".mysql_error());
$base=mysql_select_db("practicamvc",$conexion)or die("Error al conectar la BD".mysql_error());
	$sql="Select * from usuario where nombre='$user' and psw='$psw'";
	$consulta=mysql_query($sql) or die ("Error consulta");
	$cuantos= mysql_num_rows($consulta);
	
	if($cuantos==0)
	{
	echo"<FONT FACE=ARIAL COLOR=#aed0d5></font>";
	$msg="<h4>El Usuario o Password no son CORRECTOS</h4>";
	print "<meta http-equiv='refresh' content='0;url=index.php?msg=$msg'>";
	exit;
	}
	
	else
	{
	$idu=mysql_result($consulta,0,'id_usuario');
	$activo=mysql_result($consulta,0,'estatus');
		if($activo=='0')
		{
			$msg="El usuario no esta activo consulte a su administrador";
			print "<meta http-equiv='refresh' content='0;url=index.php?msg=$msg'>";
			exit;
		}
		else
		{
		print "<meta http-equiv='refresh' content='0;url=acceso.php?idu=$idu'>";
		exit;
		}
	}
?>
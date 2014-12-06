<?php
	setCOOKIE('idu',"");
	setCOOKIE('acceso',"");
	session_start();
	session_unset();
	session_destroy();
	$msg="Sesion Terminada";
	print "<meta http-equiv='refresh' content='0;url=index.php?msg=$msg'>";
	exit;
?>
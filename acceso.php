<?php

$idu=$_GET['idu'];
setCOOKIE('idu',$idu);
setCOOKIE('acceso',1);
session_start();
$_SESSION['idu']=$idu;
$_SESSION['acceso']=1;
print "<meta http-equiv='refresh' content='0;url=sistema.php'>";
exit;
?>
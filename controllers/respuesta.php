<?php
@$respuesta=$_REQUEST['respuesta'];
@$id_pregunta=$_REQUEST['id_pregunta'];
include('../conex.php');

$sql="update preguntas set valor='$respuesta' where(id_pregunta='$id_pregunta')";
$consulta=mysql_query($sql)or die("Error consulta");
 
?>

<script type="text/javascript">
<!--
function delayer(){
    window.location = "../sistema.php"
}
//-->
</script>
<body onLoad="setTimeout('delayer()', 10)">
</h1>ESPERA!</h1>
</body>
</html>
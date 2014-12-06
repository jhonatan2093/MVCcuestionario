<?php
/*
establecer la ruta de archivo controler
autor Jhonatan Gutiérrez Gutiérrez
*/
function view ($plantilla,$variables =array()){
extract($variables);
require ('views/'.$plantilla.'.tpl.php');
}
function controller($nombre){
if(empty($nombre))
$nombre='home';
$archivo="controllers/$nombre.php";
if(file_exists ($archivo))
require ($archivo);
else
echo"Error";
}
?>

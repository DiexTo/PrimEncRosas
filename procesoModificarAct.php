<?php
include_once 'conexion.php';

$id=$_POST['ids'];
$idM =  $_COOKIE["variable"];
$tarea= $_POST['tarea'];
$tema= $_POST['tema'];
$actividad= $_POST['actividades'];
$producto= $_POST['producto'];
$fecha= "2020-00-00";


$query="UPDATE Actividad SET tarea='$tarea',materia_id='$idM',tema='$tema',actividades='$actividad','producto'=$producto,'dia'=$fecha WHERE id='$id' ";
$resultado=$baseDatos->query($query);

if($resultado){
    header("Location: mostrarActividad.php");
}else{
    echo "Modificacion No Exitosa";
}


?>
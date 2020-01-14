<?php
include_once 'conexion.php';

$ids=$_REQUEST['id'];
$idM =  $_COOKIE['variable'];
$tareas= $_POST['tarea'];
$temas= $_POST['tema'];
$act= $_POST['actividades'];
$productos= $_POST['producto'];
$fecha= "2020-00-00";


$query="UPDATE actividad SET tarea='$tareas',materia_id='$idM',tema='$temas',actividades='$act',producto='$productos',dia='$fecha' WHERE id='$ids' ";
$resultado=$baseDatos->query($query);
 
var_dump($resultado);
var_dump($ids);
var_dump($tareas);
var_dump($temas);

var_dump($act);
var_dump($productos);
var_dump($fecha);
var_dump($idM);

if($resultado){
    header("Location: mostrarActividad.php");
}else{
    echo "Modificacion No Exitosa";
}


?>
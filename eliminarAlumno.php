<?php
include_once 'conexion.php';

$id=$_REQUEST['Ncontrol'];

$query="DELETE FROM alumno WHERE Ncontrol='$id' ";
$resultado=$baseDatos->query($query);

if($resultado){
    header("Location: mostrarAlumno.php");
}else{
    echo "Modificacion No Exitosa";
}



?>
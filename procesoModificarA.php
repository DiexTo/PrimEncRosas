<?php
include_once 'conexion.php';

$id=$_REQUEST['Ncontrol'];
$control= $_POST['Ncontrol'];
$nombre1= $_POST['primerNombre'];
$nombre2= $_POST['segundoNombre'];
$paterno= $_POST['apellidoPaterno'];
$materno= $_POST['apellidoMaterno'];


$query="UPDATE alumno SET Ncontrol='$control',primerNombre='$nombre1',segundoNombre='$nombre2',apellidoPaterno='$paterno',apellidoMaterno='$materno' WHERE Ncontrol='$id' ";
$resultado=$baseDatos->query($query);

if($resultado){
    header("Location: mostrarAlumno.php");
}else{
    echo "Modificacion No Exitosa";
}


?>
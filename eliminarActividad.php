<?php
include_once 'conexion.php';

$id=$_REQUEST['id'];

$query="DELETE FROM actividad WHERE id='$id' ";
$resultado=$baseDatos->query($query);

if($resultado){
    header("Location: actividad.php");
}else{
    echo "Modificacion No Exitosa";
}



?>
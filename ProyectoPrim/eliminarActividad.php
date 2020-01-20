<?php
include_once 'conexion1.php';

$id=$_REQUEST['id'];

$query="DELETE FROM actividad WHERE id='$id' ";
$resultado=$baseDatos->query($query);

if($resultado){
    header("Location: printActividades.php");
}else{
    echo "Modificacion No Exitosa";
}



?>
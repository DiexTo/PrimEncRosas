<!DOCTYPE html>
<html>
<head>
    <title> Actividad</title>
</head>
<body>
            
<?php


$id =  $_COOKIE["variable"];
$tarea= $_POST['tarea'];
$tema= $_POST['tema'];
$act= $_POST['actividades'];
$producto= $_POST['producto'];
$dia="2020-01-01";

include_once 'conexion1.php';


$query="INSERT INTO Actividad (tarea,materia_id,tema,actividades,producto,dia) VALUES ('$tarea','$id','$tema','$act','$producto','$dia')";
$resultado=$baseDatos->query($query);

if($resultado){
   echo "Exitosa";
   
}else{
   echo "No Exitosa";
}


?>
</br>
  <th><a href="printActividades.php">Mostrar Actividad</a></th></br> 
</html>





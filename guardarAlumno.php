<!DOCTYPE html>
<html>
<head>
    <title> Insertar Alumno</title>
</head>
<body>
            <thead>
                <tr>
                    <th><a href="mostrarAlumno.php">Listar Alumnos</a></th></br>
                    
                </tr>
            </thead>
<?php
include_once 'conexion.php';

$control= $_POST['Ncontrol'];
$nombre1= $_POST['primerNombre'];
$nombre2= $_POST['segundoNombre'];
$paterno= $_POST['apellidoPaterno'];
$materno= $_POST['apellidoMaterno'];


$query="INSERT INTO Alumno(Ncontrol,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno) VALUES ('$control','$nombre1','$nombre2','$paterno','$materno')";
$resultado=$baseDatos->query($query);

if($resultado){
   echo "Exitosa";
}else{
   echo "No Exitosa";
}


?>
</body>       

</html>





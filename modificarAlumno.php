<!DOCTYPE html>
<html>
<head>
    <title> Modificar Alumno</title>
</head>
<body>
    <center>
        <?php
            $id=$_REQUEST['Ncontrol'];
            include_once 'conexion.php';
            $query="SELECT * FROM Alumno WHERE Ncontrol='$id'";
            $resultado=$baseDatos->query($query);
            $row=$resultado->fetch_assoc();

        ?>

<form action="procesoModificarA.php?Ncontrol=<?php echo $row['Ncontrol']; ?>" method="POST">

        
        <br/><br/><br/>
        <input  type="text" REQUIRED name="Ncontrol" placeholder="Numero de Control" value="<?php echo $row['Ncontrol']; ?>" /><br/><br/>
        <input  type="text" REQUIRED name="primerNombre" placeholder="Primer Nombre" value="<?php echo $row['primerNombre']; ?>" /><br/><br/>
        <input  type="text" name="segundoNombre" placeholder="Segundo Nombre" value="<?php echo $row['segundoNombre']; ?>" /><br/><br/>
        <input  type="text" REQUIRED name="apellidoPaterno" placeholder="Apellido Paterno" value="<?php echo $row['apellidoPaterno']; ?>" /><br/><br/>
        <input  type="text" REQUIRED name="apellidoMaterno" placeholder="Apellido Materno" value="<?php echo $row['apellidoMaterno']; ?>" /><br/><br/>
        <input type="submit" value="Guardar" />

        </form>
    </center>




    
</body>       

</html>
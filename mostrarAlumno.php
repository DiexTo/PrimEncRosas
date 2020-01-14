<!DOCTYPE html>
<html>
<head>
    <title> Insertar Alumno</title>
</head>
<body>
    <center>
        <table border="3">
            <thead>
                <tr>
                    <th colspan="1"><a href="insertarAlumno.php">Nuevo</a></th>
                    <th colspan="4">Lista de Alumnos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Numero de Control</td>
                    <td>Primer Nombre</td>
                    <td>Segundo Nombre</td>
                    <td>Apellido Paterno</td>
                    <td>Apellido Materno</td>
                </tr>
            <?php
            include_once 'conexion.php';

                $query='select * from Alumno';
                $resultado=$baseDatos->query($query);
                while($row=$resultado->fetch_assoc()){
            ?>
                    <tr>
                        <td><?php echo $row['Ncontrol']; ?></td>
                        <td><?php echo $row['primerNombre']; ?></td>
                        <td><?php echo $row['segundoNombre']; ?></td>
                        <td><?php echo $row['apellidoPaterno']; ?></td>
                        <td><?php echo $row['apellidoMaterno']; ?></td>
                        <td><a href="modificarAlumno.php?Ncontrol=<?php echo $row['Ncontrol']; ?>">Modificar</a></td>
                        <td><a href="EliminarAlumno.php?Ncontrol=<?php echo $row['Ncontrol']; ?>">Eliminar</a></td>

                    </tr>
            <?php

                }
            ?>
            </tbody>
        </table>
    </center>
</body>       

</html>
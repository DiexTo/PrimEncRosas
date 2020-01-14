<!DOCTYPE html>
<html>
<head>
    <title> Actividad</title>
</head>
<body>
        <table border="3">
            <thead>
                <tr>
                    
                    <th colspan="4">Lista de Alumnos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ID</td>
                    <td>ID Materia</td>
                    <td>Tarea</td>
                    <td>Tema</td>
                    <td>Actividades</td>
                    <td>Producto</td>
                    <td>Fecha</td>
                </tr>
            <?php
            include_once 'conexion.php';

                $query='select * from Actividad';
                $resultado=$baseDatos->query($query);
                while($row=$resultado->fetch_assoc()){
            ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['materia_id']; ?></td>
                        <td><?php echo $row['tarea']; ?></td>
                        <td><?php echo $row['tema']; ?></td>
                        <td><?php echo $row['actividades']; ?></td>
                        <td><?php echo $row['producto']; ?></td>
                        <td><?php echo $row['dia']; ?></td>
                        <td><a href="modificarActividad.php?id=<?php echo $row['id']; ?>">Modificar</a></td>
                        <td><a href="eliminarActividad.php?id=<?php echo $row['id']; ?>">Eliminar</a></td>

                    </tr>
            <?php

                }
            ?>
            </tbody>
        </table>
     

</html>





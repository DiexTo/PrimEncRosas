<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    
        <title>Papá Movil</title>
        <body>
            <center>
                <h1>Jose Mario Encarnacion Rosas</h1>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                      <a class="nav-link" href="http://localhost/primaria/primaria.html">Actividades</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="http://localhost/primaria/interfazActividades.html">Crear Actividad</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="#">Alumnos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                  </ul>
            </center>
            <h2>lista de Alumnos</h2>

            <table class ="table">
            <thead class="thead-dark">
                <tr>
                  <th scope="col">Nu. Control</th>
                  <th scope="col">Nombre 1</th>
                  <th scope="col">Nombre 2</th>
                  <th scope="col">ap.Paterno</th>
                  <th scope="col">ap.Materno</th>
                </tr>
              </thead>
              <tbody>
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
                </tr>
                <?php
                    }
                    ?>
                </tbody>
            </table>
        </body>
    </head>
</html>
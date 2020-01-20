<!doctype html>

<html lang="en">

  <head>

  	<title>Sidebar 01</title>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

		

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<link rel="stylesheet" href="css/style.css">

  </head>

  <body>

		

		<div class="wrapper d-flex align-items-stretch">

			<nav id="sidebar">

				<div class="p-4 pt-5">

		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>

	        <ul class="list-unstyled components mb-5">

	          <li class="active">

	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>

	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="http://localhost/interfaz/interfazHome.php">Home</a>
                </li>
                <li>
                    <a href="http://localhost/interfaz/interfazAlumnos.php">Lista de Alumnos</a>
                </li>
                <li>
                    <a href="http://localhost/interfaz/interfazActividades.php">Crear Avtividad</a>
                </li>
                <li>
                        <a href="http://localhost/interfaz/printActividades.php">Lista de Actividades</a>
                </li>
                <li>
                  <a href="#">PapáMovil</a>
                </li>
	            </ul>

	      

	        </ul>







	      </div>

    	</nav>



        <!-- Page Content  -->

      <div id="content" class="p-4 p-md-5">



        <nav class="navbar navbar-expand-lg navbar-light bg-light">

          <div class="container-fluid">



           

           

              <ul class="nav navbar-nav ml-auto">

                <li class="nav-item active">

                    <a class="nav-link" href="#">Home</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="#">About</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="#">Portfolio</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="#">Contact</a>

                </li>

              </ul>

            

          </div>

        </nav>



        <h2 class="mb-4">Lista de Actividades</h2>

        <form>

          <div class="table-responsive-lg">

          <table class="table table-bordered">

            <thead class="thead-dark">

              <tr>

                <th scope="col">ID</th>

                <th scope="col">Tarea</th>

                

                <th scope="col">Materia</th>

                <th scope="col">Tema</th>

                <th scope="col">Actividad</th>

                <th scope="col">Producto</th>

                <th scope="col">Dia</th>

                <th scope="col">Acción</th>

                

              </tr>

            </thead>

            <tbody>

              //DATOS INSERTADOS MANUELMENTE SIN INTERACCION CON LA BD
              <?php
            include_once 'conexion1.php';

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
                        <td><button type="button" class="btn btn-primary btn-sm">Modificar <a href="modificarActividad.php?id=<?php echo $row['id']; ?>"></a> </button></td>  <td><button type="button" class="btn btn-danger btn-sm">Borrar <a href="eliminarActividad.php?id=<?php echo $row['id']; ?>"></a></button></td>
                      

                    </tr>
            <?php

                }
            ?>
            </tbody>

          </table>

        </div>

          </form>

      </div>

		</div>



    <script src="js/jquery.min.js"></script>

    <script src="js/popper.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/main.js"></script>

  </body>

</html>
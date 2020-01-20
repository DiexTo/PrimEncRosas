<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                    <a href="#">Lista de Alumnos</a>
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
        <h2 class="mb-4">Actividades</h2>
        <form>
        <h1>Jose Encarnacion Rosas</h1>
           
            <h2>Lista de Alumnos</h2>

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
                    include_once 'conexion1.php';

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
               
      </div>
		</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
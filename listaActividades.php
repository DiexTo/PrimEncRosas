<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
                    <a href="#">Alumnos</a>
                </li>
                <li>
                    <a href="#">Calificaciones</a>
                </li>
                <li>
                    <a href="#">Papamovil</a>
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
              <tr>
                <th scope="row">1</th>
                <td>Planas</td>
                <td>Español</td>
                <td>Caligrafia</td>
                <td>Practica sobre la escritura</td>
                <td>Un parrafo escrito en letra cursiva</td>
                <td>2020-20-01</td>
                <td>
                  <button type="button" class="btn btn-primary btn-sm">Editar</button>  <button type="button" class="btn btn-danger btn-sm">Borrar</button>
                
                
                </td>
               
              </tr>
              
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
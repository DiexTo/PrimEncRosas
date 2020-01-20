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
  
		
		<div class="wrapper d-flex align-items-stretch ">
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




          
    <script type="text/javascript">
                    function ShowSelected()
                    {
                    /* Para obtener el valor */
                    var cod = document.getElementById("id").value;
                    document.cookie ='variable='+cod;
                    alert(cod);
                    
                    var combo = document.getElementById("id");
                    var selected = combo.options[combo.selectedIndex].text;
                    if(selected === "Seleccionar Materia"){

                        document.getElementById("materia").value="";

                    }else{

                        document.getElementById("materia").value=selected;
                    }

                    }
                    </script>
                    
                
                <?php
                 include_once 'conexion1.php';


                $query='select * from Materia';
                $resultado=$baseDatos->query($query);
                ?>


                <select id="id" name="nombre"  onchange="ShowSelected();">
                <option value="" selected="selected"><b>Seleccionar Materia</b></option>
                <?php
                while ($row = mysqli_fetch_array($resultado)) {
                   // var_dump ($row);
                  ?>    
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
                    
               <?php
                }
                ?> 
                
            
                </select> 
                    </br>
                    </br>
                    </br>
                    </br>
                     <input type="text" id="materia" disabled/>


                    </br>
                    </br>


                    <form action="actividad.php" method="POST">
                    <label for="textAreaTarea">Añadir Tarea</label></br>
                    <textarea  name="tarea" placeholder="Tarea" rows="8" cols="60"></textarea>
                    </br>
                    <label for="textAreaTema">Añadir Tema</label></br>
                    <textarea  name="tema" placeholder="Tema" rows="8" cols="60"></textarea>
                    </br>
                    <label for="textAreaActividad">Añadir Actividad</label></br>
                    <textarea  name="actividades" placeholder="Actividad" rows="8" cols="60"></textarea>
                    </br>
                    <label for="textAreaProducto">Añadir Producto</label></br>
                    <textarea  name="producto" placeholder="Producto" rows="8" cols="60"></textarea>
                    <input type="submit" value="Guardar" alert/>
                     </form>
      </div>
      
		</div>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    
  </body>
</html>
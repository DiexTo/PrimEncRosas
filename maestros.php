<!DOCTYPE html>
<html>
<head>
    <title> Mostrar Materias</title>
  
                    
                                  
</head>
<body>

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
                 include_once 'conexion.php';


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
                    
                    <textarea  name="tarea" placeholder="Tarea" rows="8" cols="60"></textarea>
                    </br>
                    </br>
                    <textarea  name="tema" placeholder="Tema" rows="8" cols="60"></textarea>
                    </br>
                    </br>
                    <textarea  name="actividades" placeholder="Actividad" rows="8" cols="60"></textarea>
                    </br>
                    </br>
                    <textarea  name="producto" placeholder="Producto" rows="8" cols="60"></textarea>
                    <input type="submit" value="Guardar" />
                     </form>



</body>       

</html>
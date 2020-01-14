<!DOCTYPE html>
<html>
<head>
    <title> Modificar Actividad</title>
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

                    <?php
                        $ids=$_REQUEST['id'];
                        include_once 'conexion.php';
                        $query="SELECT * FROM Actividad WHERE id='$ids'";
                        $resultado=$baseDatos->query($query);
                        $row=$resultado->fetch_assoc();
                    ?>

                  <form action="procesoModificarAct.php?id=<?php echo $row['id']; ?>" method="POST">
                    
                   
                    <textarea  name="ids" rows="1" cols="1"><?php echo $row['id']; ?> </textarea>
                    </br>
                    <textarea  name="tarea" rows="8" cols="60"><?php echo $row['tarea']; ?></textarea>
                    </br>
                    </br>
                    <textarea  name="tema" rows="8" cols="60"><?php echo $row['tema']; ?></textarea>
                    </br>
                    </br>
                    <textarea  name="actividades"  rows="8" cols="60"> <?php echo $row['actividades']; ?></textarea>
                    </br>
                    </br>
                    <textarea  name="producto" rows="8" cols="60" > <?php echo $row['producto']; ?></textarea>
                    <input type="submit" value="Guardar" />
                     </form>

        
        

        </form>
 




    
</body>       

</html>
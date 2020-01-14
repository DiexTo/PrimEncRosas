<!DOCTYPE html>
<html>
<head>
    <title> Insertar Alumno</title>
</head>
<body>
    <center>
        <form action="guardarAlumno.php" method="POST">
        <br/><br/><br/>
        <input  type="text" REQUIRED name="Ncontrol" placeholder="Numero de Control" value="" /><br/><br/>
        <input  type="text" REQUIRED name="primerNombre" placeholder="Primer Nombre" value="" /><br/><br/>
        <input  type="text" name="segundoNombre" placeholder="Segundo Nombre" value="" /><br/><br/>
        <input  type="text" REQUIRED name="apellidoPaterno" placeholder="Apellido Paterno" value="" /><br/><br/>
        <input  type="text" REQUIRED name="apellidoMaterno" placeholder="Apellido Materno" value="" /><br/><br/>
        <input type="submit" value="Guardar" />

        </form>
    </center>




    
</body>       

</html>
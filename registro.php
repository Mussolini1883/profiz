<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        $server="localhost";
        $user="root";
        $password="";
        $db="sistema";

        $conexion=mysqli_connect($server, $user, $password, $db)
        or die ("Error en la conexion");

        $id=$_POST['txtId'];
        $name=$_POST['txtName'];
        $sexo=$_POST['cmbSexo'];

        $insertar="INSERT into datos values('$id', '$name', '$sexo')";

        $resultado=mysqli_query($conexion, $insertar)
        or die("Error al insertar registro");

        mysqli_close($conexion);
        echo "Datos registrados";




    ?>
  </body>
</html>

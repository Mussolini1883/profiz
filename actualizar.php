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
      or die("Error en la conexion");

      $id=$_POST['txtId'];
      $Name=$_POST['txtName'];

      mysqli_query($conexion, "UPDATE datos set name='$Name' where id='$id'")
      or die("Error al actualizar registro");

      mysqli_close($conexion);
      echo "Registro actualizado";


    ?>
  </body>
</html>

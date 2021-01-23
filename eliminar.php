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

        mysqli_query($conexion, "DELETE from datos where id='$id'")
        or die("Error al eliminar registro");

        mysqli_close($conexion);
        echo "Registro eliminado";

    ?>
  </body>
</html>

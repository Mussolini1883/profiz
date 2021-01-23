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
      $consulta=mysqli_query($conexion, "SELECT*from datos")
      or die("Error al consultar");

      echo '<table border="1">';
      echo '<tr>';
      echo '<th id="id">ID</th>';
      echo '<th id="name">Name</th>';
      echo '<th id="sexo">Sexo</th>';
      echo '</tr>';

      while ($extraido=mysqli_fetch_array($consulta)) {
        echo '<tr>';
        echo '<td>'.$extraido['id'].'</td>';
        echo '<td>'.$extraido['name'].'</td>';
        echo '<td>'.$extraido['sexo'].'</td>';
        echo '</tr>';
      }

      mysqli_close($conexion);
      echo '</table>';
    ?>
  </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
  </head>
  <body>
    <div class="formulario">


    <form class="" action="registro.php" method="POST">
      Id: <input class="btn1" type="text" name="txtId"><br>
      Name: <input class="btn1" type="text" name="txtName"><br>
      Sexo:
      <select class="btn" name="cmbSexo">
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
      </select><br>

      <input class="btn" type="submit" name="btnRegistrar" value="Registrar">
    </form>

    <p>--------------------------------------------------------------------------</p>

    <form class="" action="eliminar.php" method="POST">

    Id: <input class="btn1" type="text" name="txtId" value=""><br>
    <input class="btn" type="submit" name="btnEliminar" value="Eliminar registro">
      </form>

      <p>--------------------------------------------------------------------------</p>

      <form class="" action="actualizar.php" method="POST">
        Id: <input class="btn1" type="text" name="txtId"><br>
        Name: <input class="btn1" type="text" name="txtName"><br>
        <input class="btn" type="submit" name="btnActualizar" value="Actualizar registro">
      </form>

      <p>--------------------------------------------------------------------------</p>

        <form class="" action="consultar.php" method="post">
          <input class="btn" type="submit" name="btnConsultar" value="Consultar registros">

        </form>
          </div>
  </body>
</html>

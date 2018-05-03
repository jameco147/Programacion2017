<?php
require __DIR__.'/../vendor/autoload.php';
use Daw\models\Db;
use Daw\models\Consulta;
$consulta = new Consulta();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de usuarios</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
  </head>
  <body>
    <?php

        if (isset($_POST["submit"])) {
          $consulta->insert($_POST['username'], $_POST['userlastname'], $_POST['age'], $_POST['course'], $_POST['score'], $_POST['email']);

          }

        if (isset($_POST["actualizar"])) {
          $consulta->actualizar($_POST['username'], $_POST['userlastname'], $_POST['age'], $_POST['course'], $_POST['score'], $_POST['email']);

          }

        if (isset($_POST["borrar"])) {
          $consulta->borrar($_POST['eliminar']);

          }
        ?>

      <div class="wrap">
        <form>
          <p><b>Jugar como</b>
            <select>
              <option value="">Selecciona un usuario</option>
              <?php
                  $seleccion = $consulta->getUsuarios();
                  foreach ($seleccion as $fila) { ?>
                <option value="<?=$fila['nombre'] ?>"><?php echo $fila['nombre']." ". $fila['apellidos']." ".$fila['correo']; ?></option><?php } ?>
            </select>
            <input type="submit" value="PLAY!">
          </p>
        </form>
      </div>
      <a href="actualizarUsuario.php">Actualizar usuario</a>

      <a href="borrarUsuario.php">Borrar usuario</a>

      <a href="InsertarUsuario.php">Registrar un nuevo usuario</a>
  </body>
</html>

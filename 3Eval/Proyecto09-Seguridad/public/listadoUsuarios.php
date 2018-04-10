<?php
require __DIR__.'/../vendor/autoload.php';
use Daw\models\Db;
use Daw\models\Consulta;
use Daw\models\Sesion;

$sesion = new Sesion;
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
  <style>
    p {
      font-size: 22px
    }

    a {
      text-align: center;
      text-decoration: none;
      margin: 10px 518px;
      background: rgb(36, 60, 207);
      color: #fff;
      padding: 10px 20px;
      display: list-item;
    }

    a:hover {
      background: rgb(30, 2, 91);
    }
  </style>
  <body>
    <?php

        if (isset($_POST["submit"])) {
          $consulta->validate();

          }

        if (isset($_POST["actualizar"])) {
          $consulta->validate();

          }

        if (isset($_POST["borrar"])) {
          $consulta->borrar();

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

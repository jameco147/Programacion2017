<?php
require __DIR__.'/../vendor/autoload.php';
use Daw\models\Db;
use Daw\models\Consulta;
use Daw\models\Sesion;


$consulta = new Consulta();
Sesion::start();

if (Sesion::get('nombre') != "admin") {
  header("Location: Index.php");
}


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

    div{
      text-align: center;
    }

    h1 {
      text-align: center;
      margin-top: 25px;
    }
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
        if (isset($_POST["actualizar"])) {
          $consulta->validate();

          }

        if (isset($_POST["borrar"])) {
          $consulta->borrar();

          }
        ?>
      <h1>Bienvenido, <?php echo Sesion::get('nombre'); ?></h1>
      <div class="wrap">
        <form>
          <p><b>Usuarios</b>
            <select>
              <option value="">Listado de usuarios</option>
              <?php
                  $seleccion = $consulta->getUsuarios();
                  foreach ($seleccion as $fila) { ?>
                <option value="<?=$fila['nombre'] ?>"><?php echo $fila['nombre']." ". $fila['apellidos']." ".$fila['correo']; ?></option><?php } ?>
            </select>
          </p>
        </form>
      </div>
      <a href="actualizarUsuario.php">Actualizar usuario</a>

      <a href="borrarUsuario.php">Borrar usuario</a>

      <a href="InsertarUsuario.php">Registrar un nuevo usuario</a>

      <br>

      <a href="cerrarSesion.php">LogOut</a>
  </body>
</html>

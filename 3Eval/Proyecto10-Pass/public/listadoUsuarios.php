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
  <body>
    <?php
        if (isset($_POST["actualizar"])) {
          $consulta->actualizar($_POST['username'], $_POST['userlastname'], $_POST['age'], $_POST['course'], $_POST['score'], $_POST['email'], $_POST['password1'], $_POST['password2']);

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

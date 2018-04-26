<?php
require __DIR__.'/../vendor/autoload.php';
use Daw\models\Db;
use Daw\models\Consulta;
use Daw\models\Sesion;

$consulta = new Consulta();
if (isset($_POST["submit"])) {
  $consulta->insert($_POST['username'], $_POST['userlastname'], $_POST['age'], $_POST['course'], $_POST['score'], $_POST['email'], $_POST['password1'], $_POST['password2']);

  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Selecciona Usuario</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
  </head>
  <body>
    <h1 align="center">Bienvenido al Ahorcado</h1>
    <div class="wrap">
      <form action="Ahorcadodom.php" method="post" onsubmit="return comprobarLogin()">
        <p>Iniciar sesión como
          <br>
          <br>
          <input type="text" name="usuario" id="nombre" placeholder="Nombre:">
          <input type="password" name="password1" id="pass" placeholder="Contraseña:">
          <input type="submit" value="Jugar">
        </p>
        <br>
      </form>
      <script src="js/login.js" charset="utf-8"></script>
    </div>
    <a href="InsertarUsuario.php">Registrar nuevo usuario</a>
  </body>
</html>

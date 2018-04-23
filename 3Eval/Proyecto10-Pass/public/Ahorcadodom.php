<?php
require __DIR__.'/../vendor/autoload.php';
use Daw\models\Db;
use Daw\models\Consulta;
use Daw\models\Sesion;

$login = new Consulta();
$login->login();
$puntuacion = new Consulta();


if (Sesion::get('nombre') == "admin") {
  header("Location: listadoUsuarios.php");
}


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ahorcado</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
  </head>
  <body>
    <div class="wrap">
      <h1>Bienvenido, <?php echo Sesion::get('nombre'); ?> </h1>
      <p>Tu puntuacion es de <?php echo $puntuacion->getPuntuacion(); ?></p>
      <form id="formulario reto" action="#" method="post">
        <p>Introduce una letra</p>
        <br>
        <input type="text" id="entrada" value="">
        <button type="button" name="button" id="button" style="float : left;" onclick="comprobar ()" >Comprobar</button>
        <br><br>
        <input type="text" id="palabra" value="">
        <br><br>
        <h3>Intentos<h3>
        <br>
        <input type="text" id="intentos"  value="">
        <input type="text" id="resultado"   value="">
      </form>
    </div>
    <a href="cerrarSesion.php">LogOut</a>
    <script src="js/Ahorcadodom.js" charset="utf-8"></script>
  </body>
</html>

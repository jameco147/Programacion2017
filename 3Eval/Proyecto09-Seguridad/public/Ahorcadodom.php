<?php
require __DIR__.'/../vendor/autoload.php';
use Daw\models\Db;
use Daw\models\Consulta;
use Daw\models\Sesion;

$puntuacion = new Consulta();
Sesion::start();
Sesion::set('nombre', $_POST['usuario']);

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
  <style>
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
    <div class="wrap">
      <h1>Bienvenido, <?php echo Sesion::get('nombre'); ?> </h1>
      <p>Tu puntuacion es de <?php echo $puntuacion->getPuntuacion(); ?></p>
      <form id="formulario reto" action="#" method="post">
        <b>Introduce una letra<b>
        <br><br>
        <input type="text" id="entrada" value="">
        <button type="button" name="button" id="button" onclick="comprobar ()" >Comprobar</button>
        <br><br>
        <input type="text" id="palabra" value="">
        <br><br>
        <h3>Intentos<h3>
        <input type="text" id="intentos"  value="">
        <br><br>
        <input type="text" id="resultado"   value="">
      </form>
    </div>
    <a href="cerrarSesion.php">LogOut</a>
    <script src="js/Ahorcadodom.js" charset="utf-8"></script>
  </body>
</html>

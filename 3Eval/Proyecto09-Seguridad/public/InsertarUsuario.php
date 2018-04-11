<?php
require __DIR__.'/../vendor/autoload.php';
use Daw\models\Db;
use Daw\models\Consulta;
use Daw\models\Sesion;

$sesion = new Sesion;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrarse</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
  </head>
  <body>
    <div class="wrap">
      <form action="test.php" method="post" onsubmit="return espaciosVacios()">
        <h2 text align = "center">EL AHORCADO</h2><br>

        <input type="text" name="username" id="nombre" placeholder="Nombre:">
        <input type="text" name="userlastname" id="apellido" placeholder="Apellidos:">
        <input type="number" name="age" id="edad" placeholder="Edad:">
        <input type="number" name="course" id="curso" placeholder="Curso:">
        <input type="number" name="score" id="punt" placeholder="Puntuación:">
        <input type="email" name="email" id="correo" placeholder="E-mail:">
        <input type="submit" name="submit" value="Resgistrarse">
      </form>
      <script src="js/comprobarInsertar.js" charset="utf-8"></script>
    </div>
  </body>
</html>

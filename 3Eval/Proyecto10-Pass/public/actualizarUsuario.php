<?php
require __DIR__.'/../vendor/autoload.php';
use Daw\models\Db;
use Daw\models\Consulta;
use Daw\models\Sesion;

Sesion::start();

if (Sesion::get('nombre') != "admin") {
  header("Location: Index.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actualizar usuario</title>
    <link rel="stylesheet" href="css/estilo.css">
  </head>
  <body>

    <h1>Actualizar usuario</h1>
    <div class="wrap">
      <form action="listadoUsuarios.php" method="post" onsubmit="return espaciosVacios()">
        <select name="actu">
          <option value="">Selecciona un usuario</option>
          <?php
            $consulta = new Consulta();
            $seleccion = $consulta->getUsuarios();
            foreach ($seleccion as $fila) { ?>
          <option value="<?=$fila['nombre'] ?>"><?php echo $fila['nombre']; ?></option><?php
        }
        ?>
        </select>
        <br>
        <br>
        <input type="text" name="username" id="nombre" placeholder="Nombre:">
        <input type="text" name="userlastname" id="apellido" placeholder="Apellidos:">
        <input type="number" name="age" id="edad" placeholder="Edad:">
        <input type="number" name="course" id="curso" placeholder="Curso:">
        <input type="number" name="score" id="punt" placeholder="Puntuación:">
        <input type="email" name="email" id="correo" placeholder="E-mail:">
        <input type="password" name="password1" id="pass1" placeholder="Contraseña:">
        <input type="password" name="password2" id="pass2" placeholder="Repite la contraseña:">
        <input type="submit" name="actualizar" value="Actualizar datos">
    </form>
      <script src="js/comprobarInsertar.js" charset="utf-8"></script>
   </div>
   <a href="listadoUsuarios.php">Volver</a>
  </body>
</html>

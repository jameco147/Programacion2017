<?php
require __DIR__.'/../vendor/autoload.php';
use Daw\models\Db;
use Daw\models\Consulta;
use Daw\models\Sesion;

$sesion = new Sesion;

if ($sesion->comprobarAdmin == false) {
  header("Location: test.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Borrar usuario</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
  </head>
  <style>
    p{
      text-align: center;
      font-size: 22px;
      margin-top: 20px;
    }
  </style>
  <body>

    <p>Selecciona el usuario que deseas eliminar</p>
    <div class="wrap">
      <form action="listadoUsuarios.php" method="post">
        <select name="eliminar">
          <option value="">Selecciona un usuario</option>
          <?php
            $consulta = new Consulta();
            $seleccion = $consulta->getUsuarios();
            foreach ($seleccion as $fila) { ?>
          <option value="<?=$fila['nombre'] ?>"><?php echo $fila['nombre']; ?></option><?php
        }
        ?>
        </select>

        <input type="submit" name="borrar" value="Eliminar usuario">
      </form>
    </div>

  </body>
</html>

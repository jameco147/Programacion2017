<?php
require __DIR__.'/../vendor/autoload.php';
use Daw\models\Db;
use Daw\models\Consulta;
use Daw\models\Sesion;

$consulta = new Consulta();
$sesion = new Sesion;
$sesion->closeSesion();

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
    <p><?php ($sesion->getUsuario()); ?></p>
    <div class="wrap">
      <form action="Ahorcadodom.php" method="post">
        <p><b>Jugar como</b>
          <select name="usuario">
            <option value="">Selecciona un usuario</option>
            <?php
                $seleccion = $consulta->getUsuarios();
                foreach ($seleccion as $fila) { ?>
              <option value="<?=$fila['nombre'] ?>"><?php echo $fila['nombre']?></option><?php } ?>
          </select>
          <input type="submit" value="Jugar">
        </p>
      </form>
    </div>
  </body>
</html>

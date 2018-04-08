<?php

session_start();


require __DIR__.'/../vendor/autoload.php';
use Daw\models\Db;
use Daw\models\Consulta;
$consulta = new Consulta();
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
    <div class="wrap">
      <form>
        <p><b>Jugar como</b>
          <select>
            <option value="">Selecciona un usuario</option>
            <?php
                $seleccion = $consulta->getUsuarios();
                foreach ($seleccion as $fila) { ?>
              <option value="<?=$fila['nombre'] ?>"><?php echo $fila['nombre']?></option><?php } ?>
          </select>
          <input type="submit" value="PLAY!">
        </p>
      </form>
    </div>
  </body>
</html>

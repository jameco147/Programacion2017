<?php
require __DIR__.'/../vendor/autoload.php';
use Daw\models\Db;
use Daw\models\Consulta;
use Daw\models\Sesion;

$consulta = new Consulta();
if (isset($_POST["submit"])) {
  $consulta->validate();

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
  <style>

    div{
      text-align: center;
    }

    h1 {
      margin-top: 25px;
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
    <h1 align="center">Bienvenido al Ahorcado</h1>
    <div class="wrap">
      <form action="Ahorcadodom.php" method="post">
        <p><b>Iniciar sesión como</b>
          <select name="usuario">
            <option value="">Selecciona un usuario</option>
            <?php
                $seleccion = $consulta->getUsuarios();
                foreach ($seleccion as $fila) { ?>
              <option value="<?=$fila['nombre'] ?>"><?php echo $fila['nombre']?></option><?php } ?>
          </select>
          <input type="submit" value="Jugar">
        </p>
        <br>
      </form>
    </div>
    <a href="InsertarUsuario.php">Registrar nuevo usuario</a>
  </body>
</html>

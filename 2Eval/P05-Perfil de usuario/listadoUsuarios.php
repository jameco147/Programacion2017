<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de usuarios</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">
  </head>
  <style>
    p{
      font-size: 22px

    }
  </style>
  <body>
    <?php

      $conexion = new mysqli("localhost", "root", "", "juegos"); //Hago la conexion a la base de datos.

      $jugador = "SELECT * FROM juegos.usuarios WHERE nombre = '$_POST[username]'";
      $comprobarJugador = $conexion->query($jugador);
      $contar = mysqli_num_rows($comprobarJugador);

      if ($conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: " .$conexion->connect_error;
      } elseif ($contar == 1) {
        echo "<br><p align = center>El nick ya ha sido utilizado</p><br>";
        echo "<p align = center><a href='InsertarUsuario.php'>Por favor vuelve a resgistrarte con otro nombre</a></p><br><br><br>";
      } else  {

        $registro = "INSERT INTO juegos.usuarios (nombre, apellidos, edad, curso, puntuacion) VALUES ('$_POST[username]', '$_POST[userlastname]', '$_POST[age]','$_POST[course]', '$_POST[score]')";


        if ($conexion->query($registro) === TRUE) {
          echo "<br><br><h1 align = center>Usuario creado correctamente</h1><br><br><br>";
        }

      }
      ?>
      <div class="wrap">
        <form>
          <p><b>Jugar como</b>
          <select>
            <option value="">Selecciona un usuario</option>
            <?php
              $seleccion = $conexion->query("SELECT nombre FROM usuarios");
              foreach ($seleccion as $fila) { ?>
            <option value="<?=$fila['nombre']?>"><?=$fila['nombre']?></option><?php } ?>
          </select>
          <input type="submit" value="PLAY!">
          </p>
        </form>
      </div>
  </body>
  <?php mysqli_close($conexion); ?>
</html>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Lista de usuarios</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="estilo.css">
</head>
<style>
  p {
    font-size: 22px
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
  <?php

      $conexion = new mysqli("localhost", "root", "", "juegos"); //Hago la conexion a la base de datos.

      if (isset($_POST["submit"])) {

        if (empty($_POST['username']) || empty($_POST['userlastname']) || empty($_POST['age']) || empty($_POST['course']) || empty($_POST['score']) || empty($_POST['email']) ) {
          echo "<br><p align = center>No dejes ningún campo vacío</p><br>";
          echo "<p align = center><a href='InsertarUsuario.php'>Por favor vuelve a resgistrarte, gracias</a></p><br><br><br>";

        } else {

            $jugador = "SELECT * FROM juegos.usuarios WHERE nombre = '$_POST[username]'";
            $comprobarJugador = $conexion->query($jugador);
            $contar = mysqli_num_rows($comprobarJugador);

            if ($conexion->connect_errno) {
              echo "Fallo al conectar a MySQL: " .$conexion->connect_error;
            } elseif ($contar == 1) {
              echo "<br><p align = center>El nick ya ha sido utilizado</p><br>";
              echo "<p align = center><a href='InsertarUsuario.php'>Por favor vuelve a resgistrarte con otro nombre</a></p><br><br><br>";
            } else  {

              $registro = "INSERT INTO juegos.usuarios (nombre, apellidos, edad, curso, puntuacion, correo) VALUES ('$_POST[username]', '$_POST[userlastname]', '$_POST[age]','$_POST[course]', '$_POST[score]', '$_POST[email]')";

              if ($conexion->query($registro) === TRUE) {
                echo "<br><br><h1 align = center>Usuario creado correctamente</h1><br><br><br>";
              }
            }
          }
        }

      if (isset($_POST["actualizar"])) {

        if (empty($_POST['newusername']) || empty($_POST['newuserlastname']) || empty($_POST['newage']) || empty($_POST['newcourse']) || empty($_POST['newscore']) || empty($_POST['newemail'])) {
          echo "<br><p align = center>No dejes ningún campo vacío</p><br>";
          echo "<p align = center><a href='actualizarUsuario.php'>Por favor vuelve a intentarlo, gracias</a></p><br><br><br>";
        } else {

            $actualizar = "UPDATE usuarios SET nombre = '$_POST[newusername]', apellidos = '$_POST[newuserlastname]', edad = '$_POST[newage]', curso = '$_POST[newcourse]', puntuacion = '$_POST[newscore]', correo = '$_POST[newemail]' WHERE nombre = '$_POST[actu]'";

            if ($conexion->query($actualizar) === TRUE) {
              echo "<br><br><h1 align = center>Usuario actualizado correctamente</h1><br><br><br>";
            }
          }
        }


      if (isset($_POST["borrar"])) {

        if (empty($_POST['eliminar'])) {
          echo "<br><p align = center>Error</p><br>";
          echo "<p align = center><a href='borrarUsuario.php'>Selecciona un usuario para eliminar</a></p><br><br><br>";

        }else {

            $borrar = "DELETE FROM usuarios WHERE nombre = '$_POST[eliminar]'";


            if ($conexion->query($borrar) === TRUE) {
              echo "<br><br><h1 align = center>Usuario eliminado</h1><br><br><br>";

            }
          }
        }

      ?>

    <div class="wrap">
      <form>
        <p><b>Jugar como</b>
          <select>
            <option value="">Selecciona un usuario</option>
            <?php
              $seleccion = $conexion->query("SELECT nombre,apellidos,correo FROM usuarios");
              foreach ($seleccion as $fila) { ?>
            <option value="<?=$fila['nombre'] ?>"><?php echo $fila['nombre']." ". $fila['apellidos']." ".$fila['correo']; ?></option><?php } ?>
          </select>
          <input type="submit" value="PLAY!">
        </p>
      </form>
    </div>
    <a href="actualizarUsuario.php">Actualizar usuario</a>

    <a href="borrarUsuario.php">Borrar usuario</a>

    <a href="InsertarUsuario.php">Registrar un nuevo usuario</a>
</body>
<?php mysqli_close($conexion); ?>

</html>

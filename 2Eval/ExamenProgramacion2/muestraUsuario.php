<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Muestra usuario</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
  <style>
    body {
      font-family: "Roboto", Arial, sans-serif, helvetica;
    }

  </style>
  <body>
    <?php
      $conexion = new mysqli("localhost", "root", "", "juegos");
      $consulta = "SELECT * FROM usuarios WHERE id='$_GET[id]'";
      //echo $consulta;
      $recogerId = $conexion->query($consulta);


      foreach ($recogerId as $fila) {
        echo "<b>Nombre:</b> ".$fila['nombre']. " <b>Apellidos:</b> ".$fila['apellidos']."  <b>Edad:</b> ".$fila['edad']."  <b>Curso:</b> ".$fila['curso']." <b>Puntuación:</b> ".$fila['puntuacion']." <b>Correo:</b> ".$fila['correo'];
      }
    ?>

  </body>
</html>

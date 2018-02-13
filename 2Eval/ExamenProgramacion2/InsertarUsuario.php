<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrarse</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>
    <div class="wrap">
      <form action="listadoUsuarios.php" method="post">
        <h2 text align = "center">EL AHORCADO</h2><br>

        <input type="text" name="username" id="nombre" placeholder="Nombre:" required>
        <input type="text" name="userlastname" id="apellido" placeholder="Apellidos:">
        <input type="number" name="age" id="edad" placeholder="Edad:">
        <input type="number" name="course" id="curso" placeholder="Curso:">
        <input type="number" name="score" id="punt" placeholder="Puntuación:">
        <input type="email" name="email" id="correo" placeholder="E-mail:" required>
        <input type="submit" value="Resgistrarse">
      </form>
    </div>
  </body>
</html>

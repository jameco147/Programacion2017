<?php
$conexion = new mysqli("localhost", "root", "", "world");

if ($conexion->connect_errno) {
  echo "Falo al conectar a MySQL: " .$conexion->connect_error;
}else {
  $consulta="SELECT DISTINCT Continent FROM country ORDER BY Continent ASC";
  $resultado = $conexion->query($consulta);
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>GET</title>
  </head>
  <body>
    <form action="consulta.php" method="post">
      <select name="continent">
        <?php foreach ($resultado as $fila) { ?>
        <option value="<?=$fila['Continent']?>"><?=$fila['Continent']?></option><?php } ?>
      </select>
      <input type="text" name="surfacearea" placeholder="Introduce el area">
      <input type="submit" name="" value="Enviar">

    </form>

  </body>
</html>

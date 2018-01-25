<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>RetoPOST</title>
</head>

<body>
  <?php

      $conexion = new mysqli("localhost", "root", "", "world");

      if ($conexion->connect_errno) {
        echo "Falo al conectar a MySQL: " .$conexion->connect_error;
      }else {
        echo "Conectado a WORLD";
        echo "<br>";
        $continent = $_POST['continent'];
        $surface = $_POST['surfacearea'];

          if (empty($surface)) {
            $consulta = "SELECT Name FROM country WHERE Continent = '$continent'";
            echo "<br>";

            $resultado = $conexion->query($consulta);
            foreach ($resultado as $fila) {
              echo $fila['Name'] . "<br>";
            }
          }else {
            $consulta = "SELECT Name FROM country WHERE Continent= '$continent' AND SurfaceArea > '$surface'";
            echo "<br>";

            $resultado = $conexion->query($consulta);
            foreach ($resultado as $fila) {
              echo $fila['Name'] . "<br>";
            }
          }

      } 
     ?>
</body>

</html>

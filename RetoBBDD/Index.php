<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>RetoBBDD</title>
    <style>
      table, th, td {
        border: 2px solid black;
        border-collapse: collapse;
        background-color: rgb(190, 236, 223);
      }
      th, td {
    padding: 15px;
      }
      th {
        text-align: left;
      }
</style>
  </head>
  <body>
  <h1>Paises de Sudamerica</h1>
  <table style = width:50% >
  <tr>
    <th>País</th>
    <th>Superficie</th>
  </tr>

  <?php

  $conexion = new mysqli("localhost", "root", "", "world");

  if ($conexion->connect_errno) {
      echo "Fallo al conectar a MySQL: " . $conexion->connect_error;
  } else {

      $resultado = $conexion->query("SELECT * FROM country WHERE
                                    country.Continent = 'South America'
                                    ORDER BY country.SurfaceArea DESC");
      while ($fila = $resultado->fetch_assoc()) {
        echo "<tr><td>". $fila['Name'] . "</td>" . "<td>" . $fila['SurfaceArea'] . "</td></tr>";
      }
  }
  ?>

  </table>


  </body>
</html>

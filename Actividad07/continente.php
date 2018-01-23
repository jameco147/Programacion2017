<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Países por continente</title>
  <style>
  table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
  }

  td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
  }

  tr:nth-child(even) {
      background-color: #dddddd;
  }

  </style>
</head>
<body>
  <?php include "menu.php" ?>
  <?php echo "<br>" ?>
  <table style=width:50%>
    <tr>
      <th>País</th>
      <th>Continente</th>
    </tr>

    <?php

    $conexion = new mysqli("localhost", "root", "", "world");

    if ($conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: " . $conexion->connect_error;
    } else {

        $resultado = $conexion->query("SELECT country.Name, country.Continent
                                      FROM country
                                      GROUP BY country.Name
                                      ORDER BY country.Continent ASC, country.Name ASC");
        while ($fila = $resultado->fetch_assoc()) {
          echo "<tr><td>". $fila['Name'] . "</td>" . "<td>" . $fila['Continent'] . "</td></tr>";
        }
    }
    ?>

  </table>
</body>

</html>

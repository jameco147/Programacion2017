<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Países por superficie</title>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
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
      <th>Superficie</th>
    </tr>

    <?php

    $conexion = new mysqli("localhost", "root", "", "world");

    if ($conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: " . $conexion->connect_error;
    } else {

        $resultado = $conexion->query("SELECT country.name, country.SurfaceArea
                                      FROM country
                                      ORDER BY country.SurfaceArea DESC");
        while ($fila = $resultado->fetch_assoc()) {
          echo "<tr><td>". $fila['name'] . "</td>" . "<td>" . $fila['SurfaceArea'] . "</td></tr>";
        }
    }
    ?>

  </table>
</body>

</html>

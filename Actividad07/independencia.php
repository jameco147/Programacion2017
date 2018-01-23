<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Año de independencia</title>
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
      <th>Año de independencia</th>
    </tr>

    <?php

      $conexion = new mysqli("localhost", "root", "", "world");

      if ($conexion->connect_errno) {
          echo "Fallo al conectar a MySQL: " . $conexion->connect_error;
      } else {

          $resultado = $conexion->query("SELECT * FROM country");
          while ($fila = $resultado->fetch_assoc()) {
            if ($fila['IndepYear'] == NULL ) {
              $fila['IndepYear'] = "NO INDEPENDIZADO";
            }
            echo "<tr><td>". $fila['Name'] . "</td>" . "<td>" . $fila['IndepYear'] . "</td></tr>";
          }
      }
      ?>

  </table>

</body>

</html>

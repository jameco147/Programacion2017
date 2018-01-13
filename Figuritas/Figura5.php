<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Figura 5</title>
  </head>
  <body>

    <h1>
      <?php
        $lineas = 5;

        for ($i=1; $i <= $lineas ; $i++) {

          //Primer for para los espacios
          for ($j=1; $j <= ($lineas - $i) ; $j++) {
            echo "&nbsp";
          }

          //for para introducir los *
          for ($j=0; $j < ($i * 2)-1 ; $j++) {
            echo "*";
          }

            //Introducir intro
            echo "<br>";
        }
      ?>
    </h1>
  </body>
</html>

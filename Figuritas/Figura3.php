<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Figura 3</title>
  </head>
  <body>

    <h1>
      <?php
      for ($i=1; $i <= 7 ; $i++) {
        for ($j=0; $j < $i; $j++) {
          echo "*";
        }
          echo "<br>";
      }
      ?>
    </h1>

  </body>
</html>

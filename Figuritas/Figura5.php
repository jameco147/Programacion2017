<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Figura 5</title>
  </head>
  <body>

    <p align="center">
      <?php


        $figura = "*";

        for ($i=0; $i < 5 ; $i++) {
          echo  $figura . "<br>";
          $figura = "*" . $figura . "*";
        }
      ?>
    </p>




  </body>
</html>

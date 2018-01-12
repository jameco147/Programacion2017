<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Figura 4</title>
  </head>
  <body>

    <h1>
      <?php
      $fig = "*" . "*" . "*";
      $figura = "*";
      for ($i=0; $i < 3 ; $i++) {

        echo $figura . "<br>";
        $figura = $figura . "*" ."*";

      }


      for ($i=0; $i < 2 ; $i++) {

      echo $fig . "<br>";
      $fig = "*";

      }


      ?>
    </h1>


  </body>
</html>

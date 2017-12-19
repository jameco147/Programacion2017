<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php $pagina="Quienes somos" ?>
    <?php echo "<title>$pagina</title>"?>
  </head>
  <style>

  ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      width: 200px;
      background-color: #f1f1f1;
      border: 1px solid #555;
  }

  li a {
      display: block;
      color: #000;
      padding: 8px 16px;
      text-decoration: none;
  }

  li {
      text-align: center;
      border-bottom: 1px solid #555;
  }

  li:last-child {
      border-bottom: none;
  }

  li a.active {
      background-color: #4CAF50;
      color: white;
  }

  li a:hover:not(.active) {
      background-color: #555;
      color: white;
  }


  </style>
  <body>

    <?php $pagina="Quienes somos" ?>



    <h2><?php echo "Esto es el $pagina"?><h2>


      <ul>
        <li><a class="<?php if($pagina=="Quienes somos") echo "active";?>" href="./Quienessomos.php">Quienes somos</a></li>
        <li><a class="<?php if($pagina=="Precio") echo "active";?>" href="./Precios.php">Precios</a></li>
        <li><a class="<?php if($pagina=="Contacto") echo "active";?>" href="./Contacto.php">Contacto</a></li>
        <li><a class="<?php if($pagina=="Index") echo "active";?>" href="./Index.php">Indice</a></li>
      </ul>






  </body>
</html>

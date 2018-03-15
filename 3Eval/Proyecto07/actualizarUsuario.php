<?php
include "model/Consulta.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actualizar usuario</title>
    <link rel="stylesheet" href="css/estilo.css">
  </head>
  <style>
    p{
      text-align: center;
      font-size: 22px;
      margin-top: 20px;
    }
  </style>
  <body>

    <p>Actualizar usuario</p>
    <div class="wrap">
      <form action="listadoUsuarios.php" method="post" onsubmit="return actualizarblanco()">
        <select name="actu">
          <option value="">Selecciona un usuario</option>
          <?php
            $consulta = new Consulta();
            $seleccion = $consulta->getUsuarios();
            foreach ($seleccion as $fila) { ?>
          <option value="<?=$fila['nombre'] ?>"><?php echo $fila['nombre']; ?></option><?php
        }
        ?>
        </select>
        <br>
        <br>
         <input type="text" name="newusername" id="nuevonombre" placeholder="Nombre:">
         <input type="text" name="newuserlastname" id="nuevoapellido" placeholder="Apellidos:">
         <input type="number" name="newage" id="nuevoedad" placeholder="Edad:">
         <input type="number" name="newcourse" id="nuevocurso" placeholder="Curso:">
         <input type="number" name="newscore" id="nuevopunt" placeholder="Puntuación:">
         <input type="email" name="newemail" id="nuevocorreo" placeholder="E-mail:">
         <input type="submit" name="actualizar" value="Actualizar datos">
    </form>
      <script src="js/comprobarActualizar.js" charset="utf-8"></script>
   </div>




  </body>
</html>

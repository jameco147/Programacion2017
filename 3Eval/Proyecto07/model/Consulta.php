<?php
require_once "Db.php";

/**
 *
 */
class Consulta
{
  private $db;
  private $conector;

  function __construct()
  {
  $this->db=new Db();
  $this->db->conectar();
  $this->conector=$this->db->getConector();
  }


  public function insertar()
  {
    if (empty($_POST['username']) || empty($_POST['userlastname']) || empty($_POST['age']) || empty($_POST['course']) || empty($_POST['score']) || empty($_POST['email']) ) {
      echo "<br><p align = center>No dejes ningún campo vacío</p><br>";
      echo "<p align = center><a href='InsertarUsuario.php'>Por favor vuelve a resgistrarte, gracias</a></p><br><br><br>";

    } else {

        $jugador = "SELECT * FROM juegos.usuarios WHERE nombre = '$_POST[username]'";
        $comprobarJugador = $this->conector->query($jugador);
        $contar = mysqli_num_rows($comprobarJugador);

        if ($this->conector->connect_errno) {
          echo "Fallo al conectar a MySQL: " .$conexion->connect_error;
        } elseif ($contar == 1) {
          echo "<br><p align = center>El nick ya ha sido utilizado</p><br>";
          echo "<p align = center><a href='InsertarUsuario.php'>Por favor vuelve a resgistrarte con otro nombre</a></p><br><br><br>";
        } else  {

          $registro = "INSERT INTO juegos.usuarios (nombre, apellidos, edad, curso, puntuacion, correo) VALUES ('$_POST[username]', '$_POST[userlastname]', '$_POST[age]','$_POST[course]', '$_POST[score]', '$_POST[email]')";

          if ($this->conector->query($registro) === TRUE) {
            echo "<br><br><h1 align = center>Usuario creado correctamente</h1><br><br><br>";
          }
        }
      }
  }


  public function actualizar()
  {
    if (empty($_POST['newusername']) || empty($_POST['newuserlastname']) || empty($_POST['newage']) || empty($_POST['newcourse']) || empty($_POST['newscore']) || empty($_POST['newemail'])) {
      echo "<br><p align = center>No dejes ningún campo vacío</p><br>";
      echo "<p align = center><a href='actualizarUsuario.php'>Por favor vuelve a intentarlo, gracias</a></p><br><br><br>";
    } else {

        $actualizar = "UPDATE usuarios SET nombre = '$_POST[newusername]', apellidos = '$_POST[newuserlastname]', edad = '$_POST[newage]', curso = '$_POST[newcourse]', puntuacion = '$_POST[newscore]', correo = '$_POST[newemail]' WHERE nombre = '$_POST[actu]'";

        if ($this->conector->query($actualizar) === TRUE) {
          echo "<br><br><h1 align = center>Usuario actualizado correctamente</h1><br><br><br>";
        }
      }
  }

  public function borrar()
  {
    if (empty($_POST['eliminar'])) {
      echo "<br><p align = center>Error</p><br>";
      echo "<p align = center><a href='borrarUsuario.php'>Selecciona un usuario para eliminar</a></p><br><br><br>";

    }else {

        $borrar = "DELETE FROM usuarios WHERE nombre = '$_POST[eliminar]'";


        if ($this->conector->query($borrar) === TRUE) {
          echo "<br><br><h1 align = center>Usuario eliminado</h1><br><br><br>";

        }
      }
  }

  public function getUsuarios()
  {
      $cons = $this->conector->query("SELECT nombre,apellidos,correo FROM usuarios");
      return $cons;
  }



}
?>

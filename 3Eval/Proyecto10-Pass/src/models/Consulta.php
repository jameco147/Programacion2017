<?php

namespace Daw\models;
use Daw\models\Sesion;

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

  public function insert($user, $lastname, $age, $course, $score, $email, $pass1, $pass2)
  {
    if (empty($user) || empty($lastname) || empty($age) || empty($course) ||
      empty($score) || empty($email) || empty($pass1) || empty($pass2)) {
      echo "<br><p align = center>No dejes ningún campo vacío</p><br>";
      echo "<p align = center><a href='InsertarUsuario.php'>Por favor vuelve a resgistrarte, gracias</a></p><br><br><br>";
    }
    if ($pass1 != $pass2) {
      echo "<br><p align = center>Las contraseñas no coinciden</p><br>";
      echo "<p align = center><a href='InsertarUsuario.php'>Por favor vuelve a resgistrarte, gracias</a></p><br><br><br>";

    } else {
      $jugador = "SELECT * FROM juegos.usuarios WHERE nombre = '$user'";
      $comprobarJugador = $this->conector->query($jugador);
      $contar = mysqli_num_rows($comprobarJugador);

      if ($this->conector->connect_errno) {
        echo "Fallo al conectar a MySQL: " .$conexion->connect_error;
      } elseif ($contar >= 1) {
        echo "<br><p align = center>El nick ya ha sido utilizado</p><br>";
        echo "<p align = center><a href='InsertarUsuario.php'>Por favor vuelve a resgistrarte con otro nombre</a></p><br><br><br>";
      } else {
        $pass1= hash('sha512', $pass1);

        $registro = "INSERT INTO juegos.usuarios (nombre, apellidos, edad, curso, puntuacion, correo, pass) VALUES ('$user', '$lastname', '$age', '$course', '$score', '$email', '$pass1')";
        if ($this->conector->query($registro) === TRUE) {
          echo "<br><br><h1 align = center>Usuario creado correctamente</h1><br><br><br>";
        }
      }
    }
  }

  public function actualizar($user, $lastname, $age, $course, $score, $email, $pass1, $pass2)
  {
    if (empty($user) || empty($lastname) || empty($age) || empty($course) ||
      empty($score) || empty($email) || empty($pass1) || empty($pass2)) {
      echo "<br><p align = center>No dejes ningún campo vacío</p><br>";
      echo "<p align = center><a href='InsertarUsuario.php'>Por favor vuelve a resgistrarte, gracias</a></p><br><br><br>";
    }
    if ($pass1 != $pass2) {
      echo "<br><p align = center>Las contraseñas no coinciden</p><br>";
      echo "<p align = center><a href='InsertarUsuario.php'>Por favor vuelve a resgistrarte, gracias</a></p><br><br><br>";

    } else {
      $jugador = "SELECT * FROM juegos.usuarios WHERE nombre = '$user'";
      $comprobarJugador = $this->conector->query($jugador);
      $contar = mysqli_num_rows($comprobarJugador);

      if ($this->conector->connect_errno) {
        echo "Fallo al conectar a MySQL: " .$conexion->connect_error;
      } elseif ($contar >= 1) {
        echo "<br><p align = center>Error: El nick ya ha sido utilizado</p><br>";
      } else {
        $actualizar = "UPDATE usuarios SET nombre = '$user', apellidos = '$lastname', edad = '$age', curso = '$course', puntuacion = '$score', correo = '$email', pass = '$pass1' WHERE nombre = '$_POST[actu]'";
         if ($this->conector->query($actualizar) === TRUE) {
           echo "<br><br><h1 align = center>Usuario actualizado correctamente</h1><br><br><br>";
      }
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

  public function getPuntuacion($user)
  {
    $result = $this->conector->query("SELECT puntuacion FROM usuarios WHERE nombre = '$user'");
    while ($fila = $result->fetch_assoc()) {
      return $fila['puntuacion'];
    }
  }

  public function login($pass, $user)
  {
    if (!empty($pass) && !empty($user)) {

      $password = $pass;
      $password = hash('sha512', $password);
      //echo "SELECT nombre, pass FROM usuarios WHERE nombre = '$_POST[usuario]' AND pass = $password ";
      $login = $this->conector->query("SELECT * FROM usuarios WHERE nombre = '$user' AND pass = '$password' ");
      if (mysqli_num_rows($login) > 0) {
        Sesion::start();
        Sesion::set('nombre', $user);

      } else {
        header("Location: Index.php");
      }

    } else {
      header("Location: Index.php");
      echo "Rellena todos los campos";
    }
  }

}
?>

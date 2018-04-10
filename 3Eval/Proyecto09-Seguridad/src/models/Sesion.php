<?php

namespace Daw\models;
/**
 *
 */
class Sesion
{
  private $usuario;

  function __construct()
  {
    if (!isset($_SESSION)) {
      $this->initSesion();
    }

  }

  public function initSesion()
  {
    session_start();
  }

  public function setUsuario($usuario)
  {
    $this->usuario=$usuario;
  }


    /**
     * Get the value of Usuario
     *
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    public function comprobarAdmin()
    {
      if ($this->usuario == "admin") {
        return true;
      }
    }

    public function closeSesion()
    {
      session_destroy();
    }

}
?>

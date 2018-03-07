<?php
require_once "models/pokemon.php";
/**
 *
 */
class Sergiander extends Pokemon
{
  private $ascuas=75;

  function __construct($nombre)
  {
    parent::setNombre($nombre);
    parent::setVida(250);
    parent::setTipo("Fuego");
  }

  public function cantar(){
     return "Sooooy un hacker y aquí en el bosque soy feliz robando Wifi";
  }


    /**
     * Get the value of Ascuas
     *
     * @return mixed
     */
    public function getAscuas()
    {
        return $this->ascuas;
    }

    /**
     * Set the value of Ascuas
     *
     * @param mixed ascuas
     *
     * @return self
     */
    public function setAscuas($ascuas)
    {
        $this->ascuas = $ascuas;

        return $this;
    }

}
?>

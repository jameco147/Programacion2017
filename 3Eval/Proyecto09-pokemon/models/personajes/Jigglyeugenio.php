<?php
require_once "models/pokemon.php";
/**
 *
 */
class Jigglyeugenio extends Pokemon
{
  private $dormir=150;

  function __construct($nombre)
  {
    parent::setNombre($nombre);
    parent::setVida(200);
    parent::setTipo("Hada");
  }

  public function dormilon(){
  return parent::getVida() + $this->dormir;
  }


    /**
     * Get the value of Dormir
     *
     * @return mixed
     */
    public function getDormir()
    {
        return $this->dormir;
    }

    /**
     * Set the value of Dormir
     *
     * @param mixed dormir
     *
     * @return self
     */
    public function setDormir($dormir)
    {
        $this->dormir = $dormir;

        return $this;
    }

}
?>

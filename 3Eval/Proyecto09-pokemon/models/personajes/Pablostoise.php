<?php
require_once "models/pokemon.php";
/**
 *
 */
class Pablostoise extends Pokemon
{
  private $surf=25;

  function __construct($nombre)
  {
    parent::setNombre($nombre);
    parent::setVida(400);
    parent::setTipo("Agua");
  }

  public function potenciarPoder(){
    $surf = $this->surf * 40;
    return $surf;
  }

    /**
     * Get the value of Surf
     *
     * @return mixed
     */
    public function getSurf()
    {
        return $this->surf;
    }

    /**
     * Set the value of Surf
     *
     * @param mixed surf
     *
     * @return self
     */
    public function setSurf($surf)
    {
        $this->surf = $surf;

        return $this;
    }

}

?>

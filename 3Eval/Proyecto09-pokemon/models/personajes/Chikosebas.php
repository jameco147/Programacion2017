<?php
require_once "models/pokemon.php";
/**
 *
 */
class Chikosebas extends Pokemon
{

  private $latigocepa=12;
  private $sexo="Macho";

  function __construct($nombre)
  {
    parent::setNombre($nombre);
    parent::setVida(100);
    parent::setTipo("Planta");
  }

  public function transgenero(){
  return $this->sexo="Hembra";
  }


    /**
     * Get the value of Latigocepa
     *
     * @return mixed
     */
    public function getLatigocepa()
    {
        return $this->latigocepa;
    }

    /**
     * Set the value of Latigocepa
     *
     * @param mixed latigocepa
     *
     * @return self
     */
    public function setLatigocepa($latigocepa)
    {
        $this->latigocepa = $latigocepa;

        return $this;
    }

    /**
     * Get the value of Sexo
     *
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set the value of Sexo
     *
     * @param mixed sexo
     *
     * @return self
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

}
?>

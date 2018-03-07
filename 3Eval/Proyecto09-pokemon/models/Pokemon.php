<?php
/**
 *
 */
class pokemon
{
  private $vida;
  private $tipo="";
  private $nombre="";

  public function __construct()
  {

  }
  public function gritarNombre(){
    return strtoupper($this->nombre);
  }
  public function ataque($damage, $class){
    $vidaRestante = $class->getVida()-$damage;
    return $vidaRestante;
  }

    /**
     * Get the value of Vida
     *
     * @return mixed
     */
    public function getVida()
    {
        return $this->vida;
    }

    /**
     * Set the value of Vida
     *
     * @param mixed vida
     *
     * @return self
     */
    public function setVida($vida)
    {
        $this->vida = $vida;

        return $this;
    }

    /**
     * Get the value of Tipo
     *
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of Tipo
     *
     * @param mixed tipo
     *
     * @return self
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of Nombre
     *
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of Nombre
     *
     * @param mixed nombre
     *
     * @return self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

}
?>

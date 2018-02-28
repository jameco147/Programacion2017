<?php
/**
 *
 */
class cuadrado
{
  private $lado;

  function __construct($lado=0)
  {
    $this->lado=$lado;
  }

  public function getLadoCuadrado(){
    return $this->lado;
  }

  public function setLado($valor3){
    if ($valor3 <= 0){
      $this->lado = 1;
    } else {
      $this->lado = $valor3;
    }
  }

  public function area(){
    return $this->lado * $this->lado;
  }

  public function perimetro(){
    return 4 * $this->lado;
  }
}
?>
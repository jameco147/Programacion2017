<?php
/**
 *
 */
class triangulo
{
  private $base;
  private $altura;

  public function __construct($base=0,$altura=0){
    $this->base=$base;
    $this->altura=$altura;
  }


  public function getDimensionesTriangulo(){
    $array = [
      $base = $this->base,
      $altura = $this->altura
    ];
    return $array;
  }

  public function setDimensiones($valor,$valor2){
    if ($valor<0) {
      $this->base = 0;
    } else {
      $this->base=$valor;
    }

    if ($valor2<0) {
      $this->altura = 0;
    } else {
      $this->altura=$valor2;
    }
  }

  public function area(){
    return ($this->altura * $this->base) / 2;

  }

  public function perimetro(){
    return ((2 * $this->altura) + $this->base);

  }
}
?>
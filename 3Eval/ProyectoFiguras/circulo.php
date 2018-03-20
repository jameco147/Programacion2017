<?php
/**
 *
 */
class circulo
{
  private $radio;

  function __construct($radio=0)
  {
    $this->radio=$radio;
  }

  public function getRadioCirculo(){
    return $this->lado;
  }

  public function setRadio($valor4){
    if ($valor4 <= 0) {
      $this->radio = 1;
    } else {
      $this->radio = $valor4;
    }
  } 

   public function area(){
     return round(pow($this->radio, 2) * pi(),2);
   } 

   public function perimetro(){
     return round(2 * $this->radio * pi(),2);
   }
}
?>